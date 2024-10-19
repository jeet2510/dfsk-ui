<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChangeLog;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChangeLogController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('change_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $changeLogs = ChangeLog::with(['user', 'page', 'section'])->get();

        return view('admin.changeLogs.index', compact('changeLogs'));
    }

    public function show(ChangeLog $changeLog)
    {
        abort_if(Gate::denies('change_log_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $changeLog->load('user', 'page', 'section');

        return view('admin.changeLogs.show', compact('changeLog'));
    }
}
