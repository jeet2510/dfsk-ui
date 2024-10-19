<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyDropdownRequest;
use App\Http\Requests\StoreDropdownRequest;
use App\Http\Requests\UpdateDropdownRequest;
use App\Models\Dropdown;
use App\Models\Site;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DropdownController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('dropdown_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Dropdown::with(['site'])->select(sprintf('%s.*', (new Dropdown)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'dropdown_show';
                $editGate      = 'dropdown_edit';
                $deleteGate    = 'dropdown_delete';
                $crudRoutePart = 'dropdowns';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->addColumn('site_title', function ($row) {
                return $row->site ? $row->site->title : '';
            });

            $table->editColumn('group', function ($row) {
                return $row->group ? Dropdown::GROUP_SELECT[$row->group] : '';
            });
            $table->editColumn('sortorder', function ($row) {
                return $row->sortorder ? $row->sortorder : '';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('value', function ($row) {
                return $row->value ? $row->value : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'site']);

            return $table->make(true);
        }

        return view('admin.dropdowns.index');
    }

    public function create()
    {
        abort_if(Gate::denies('dropdown_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sites = Site::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.dropdowns.create', compact('sites'));
    }

    public function store(StoreDropdownRequest $request)
    {
        $dropdown = Dropdown::create($request->all());

        return redirect()->route('admin.dropdowns.index');
    }

    public function edit(Dropdown $dropdown)
    {
        abort_if(Gate::denies('dropdown_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sites = Site::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $dropdown->load('site');

        return view('admin.dropdowns.edit', compact('dropdown', 'sites'));
    }

    public function update(UpdateDropdownRequest $request, Dropdown $dropdown)
    {
        $dropdown->update($request->all());

        return redirect()->route('admin.dropdowns.index');
    }

    public function show(Dropdown $dropdown)
    {
        abort_if(Gate::denies('dropdown_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dropdown->load('site');

        return view('admin.dropdowns.show', compact('dropdown'));
    }

    public function destroy(Dropdown $dropdown)
    {
        abort_if(Gate::denies('dropdown_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dropdown->delete();

        return back();
    }

    public function massDestroy(MassDestroyDropdownRequest $request)
    {
        $dropdowns = Dropdown::find(request('ids'));

        foreach ($dropdowns as $dropdown) {
            $dropdown->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
