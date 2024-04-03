<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    public function manage()
    {
        $team['table'] = [
            'table_url' => route('team.data'),
            'columns' => [
                [
                    'label' => 'Nama',
                    'name' => 'name',
                ],
                [
                    'label' => 'Image',
                    'name' => 'team_image',
                ],
                [
                    'label' => 'Jabatan',
                    'name' => 'position'
                ],
                [
                    'label' => 'Aksi',
                    'name' => 'action'
                ],
            ]
        ];

        return view('admin.team.manage', $team);
    }

    public function getData()
    {
        try {
            $team = Team::select([
            'id',
            'name',
            'position',
            'team_image',
            'created_at'
        ])
        ->orderBy('name', 'asc');

        return DataTables::of($team)

            ->addColumn('created_at', function ($team) {
                    return date('d-m-Y', strtotime($team->created_at));
                })

            ->addColumn('updated_at', function ($team) {
                    return date('d-m-Y H:i:s', strtotime($team->updated_at));
                })

            ->addColumn('team_image', function ($team) {
                    $url = asset('/images/teams/' . $team->team_image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })

            ->addColumn('action', function ($team) {
                $string = '<a href="' . route('team.edit', $team->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('team.delete', $team->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                return $string;
            })
            ->rawColumns(['action', 'team_image'])
            ->make(true);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        return view('admin.team.form');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {
            if ($request->hasFile('team_image')) {
                $imageFile = $request->team_image;
                $teamImage = $input['name'] . '.' . $imageFile->extension();
                $imageFile->move(public_path(). '/images/teams/', $teamImage);
            }

            $input['team_image'] = $teamImage;

            $createTeam = Team::create($input);

            if ($createTeam) {
                return redirect()->route('team.manage')->with('success', 'Berhasil menambahkan anggota baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan anggota baru');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $data['team'] = Team::findOrFail($id);
            return view('admin.team.form', $data);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $pathImage = public_path() . '/images/teams/' . $team->team_image;

        if ($request->hasFile('team_image')) {
            File::delete($pathImage);
            $imageFile = $request->team_image;
            $teamImage = $team['name'] . '.' . $imageFile->extension();
            $imageFile->move(public_path(). '/images/teams/', $teamImage);
        } elseif($team->team_image) {
            $teamImage = $team->team_image;
        } else {
            $teamImage = null;
        }

        $inputUpdate = $request->all();

        try {
            $teamUpdate = $team;

            if ($teamUpdate->team_image) {
                $inputUpdate['team_image'] = $teamImage;
            }

            $teamUpdate = $team->update($inputUpdate);

            if ($teamUpdate) {
                return redirect()->route('team.manage')->with('success', 'Berhasil mengupdate data anggota');
            }
            return redirect()->back()->with('error', 'Gagal mengupdate data anggota');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $team = Team::findOrFail($id);
        try {
            $pathImage = public_path() . '/images/teams/' . $team->team_image;
            File::delete($pathImage);

            $teamDelete = $team->delete();

            if ($teamDelete) {
                return redirect()->route('team.manage')->with('success', 'Anggota team berhasil dihapus');
            }
            return redirect()->back()->with('error', 'Anggota team gagal dihapus');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }
}
