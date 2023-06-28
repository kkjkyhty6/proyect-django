config/app.php yconfig/app.php y
        return view('admin.index', compact('admins', 'userProfiles'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $admin = Admin::create($request->all());

        return redirect()->route('admin.index');
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $admin->update($request->all());

        return redirect()->route('admin.index');
    }

    public function destroy(Admin $admin)