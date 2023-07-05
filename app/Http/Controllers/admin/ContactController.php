<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\services\ContactController as ServiceContactController;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class ContactController extends Controller
{
    public function index()
    {
        if (!session('user')['userid']) {
            return view('admin.login');
        }

        $contactController = new ServiceContactController();
        $data_contact = $contactController->getContact();

        $contacts = collect([]);
        $perPage = 10;
        $currentPage = max(1, request()->input('page', 1));

        $offset = ($currentPage - 1) * $perPage;

        $paginatedContacts = collect($contacts)->slice($offset, $perPage);

        if ($data_contact['data'] != null)
            $contacts = $data_contact['data'];
        
        $lastPage = ceil($contacts->count() / $perPage);
        $startPage = max(1, $currentPage - 2);
        $endPage = min($lastPage, $currentPage + 2);
    
        if ($startPage === 1 && $currentPage === 1)
            $endPage = min($lastPage, 3);
        
        $endPage = min($lastPage, $startPage + 4);
    
        $contacts = $contacts->forPage($currentPage, $perPage);

        $i = ($currentPage - 1) * $perPage + 1;

        return view('admin.ManagerContact', [
            'contacts' => $contacts,
            'paginatedContacts' => $paginatedContacts,
            'pagination' => [
                'perPage' => $perPage,
                'currentPage' => $currentPage,
                'lastPage' => $lastPage,
                'startPage' => $startPage,
                'endPage' => $endPage,
                'i' => $i,
            ],
        ]);
    }
}
