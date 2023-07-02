<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        // dd(session());
        // kiem tra xem da tung dang nhap va con luu session chua
        if (!session('user')) {
            $tried_login = DB::table('check_tried_login')->where(['username' => $request->username, 'success' => 0])->get();

            $hashMd5 = md5($request->password);
            $hashSha1 = sha1($hashMd5);
            $hashPassword = $hashSha1;
            $check = DB::table('account')->where(['username' => $request->username, 'password' => $hashPassword])->first();

            $checkTimeBlock = DB::table('account')->where(['username' => $request->username])->first();
            if (count($tried_login) > 3) {
                if ($checkTimeBlock->timeblock != 0) {
                    if ((time() - $checkTimeBlock->timeblock) > 60) {
                        DB::table('check_tried_login')->where(['username' => $request->username, 'success' => 0])->delete();
                        // $checkTimeBlock->timeblock = 0;
                        // $checkTimeBlock->save();
                        DB::table('account')
                        ->where(['username' => $request->username])
                        ->update([
                            'timeblock' => 0,
                        ]);
                        return $next($request);
                    }
                    return redirect()->route('login.admin');
                } else {
                    DB::table('account')
                    ->where(['username' => $request->username])
                    ->update([
                        'timeblock' => time(),
                    ]);
                    // $checkTimeBlock->timeblock = time();
                    // $checkTimeBlock->save();
                }
                return redirect()->route('login.admin')->with('error', 'Bạn đã nhập sai tài khoản hoặc mật khẩu quá 3 lần không đúng, nên bị chặn trong 1 phút');
            }

            if ($check) {
                $user = [
                    'userid' => $check->id,
                    'username' => $check->username,
                    'fullname' => $check->fullname,
                    'role_id' => $check->role_id,
                ];
                session()->put('user', $user);
                DB::table('check_tried_login')
                ->insert([
                    'username' => $request->username,
                    'password' => '●●●●●●',
                    'success' => 1,
                ]);
                // return redirect()->route('admin');
                if ($check->role_id == 1) {
                    return $next($request);
                } else {
                    return redirect()->route('post.admin');
                }
            } else {
                if (!is_null($request->username) && !is_null($request->password)) {
                    // kiem tra co gang dang nhap
                    DB::table('check_tried_login')
                    ->insert([
                        'username' => $request->username,
                        'password' => $request->password,
                        'success' => 0,
                    ]);
                    // return redirect()->route('login.admin')->with('error', 'Đăng nhập không thành công!');
                    $message = 'Đăng nhập không thành công!';
                } else {
                    $message = 'Tài khoản hoặc mật khẩu của bạn đang trống!';
                }
                // else {
                //     // return redirect()->route('login.admin')->with('error', 'Đăng nhập không thành công!');
                // }                
                // return view('admin.login')->with('error', 'Đăng nhập không thành công!');
                return redirect()->route('login.admin')->with('error', $message);
            }
        } else {
            // return route('login.admin');
            return $next($request);
        }
    }
}
