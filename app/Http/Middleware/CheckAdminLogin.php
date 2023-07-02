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
        if (!session('user')['userid']) {
            $tried_login = DB::table('check_tried_login')->where(['username' => $request->username, 'success' => 0])->get();    

            $hashMd5 = md5($request->password);
            $hashSha1 = sha1($hashMd5);
            $hashPassword = $hashSha1;
            $check = DB::table('account')->where(['username' => $request->username, 'password' => $hashPassword])->first();

            if (count($tried_login) > 3) {
                if ($check->timeblock == 0) {
                    $check->timeblock = time();
                    $check->save();
                }
                return view('admin.login')->with('error', 'Bạn đã nhập sai tài khoản hoặc mật khẩu quá 3 lần không đúng, nên bị chặn trong 1 phút');
            }
            if (isset($check->timeblock) != 0) {
                if ((time() - $check->timeblock) > 60) {
                    $tried_login->delete();
                    $check->timeblock = 0;
                    $check->save();
                    return $next($request);
                }
                return route('login.admin');
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
                // if ($check->role_id == 1) {
                    return $next($request);
                // } else {
                //     return 
                // }
            } else {
                // kiem tra co gang dang nhap
                DB::table('check_tried_login')
                ->insert([
                    'username' => $request->username,
                    'password' => $request->password,
                    'success' => 0,
                ]);
                // return view('admin.login')->with('error', 'Đăng nhập không thành công!');
                return route('login.admin')->with('error', 'Đăng nhập không thành công!');
            }
        } else {
            // return route('login.admin');
            return $next($request);
        }
    }
}
