// app/controllers/NerdController.php

<?php

...

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the nerds
        $nerds = Nerd::all();

        // load the view and pass the nerds
        return View::make('nerds.index')
            ->with('nerds', $nerds);
    }

...

