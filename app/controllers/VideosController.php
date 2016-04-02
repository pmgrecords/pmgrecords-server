<?php

class VideosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /videos
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Video::all();
        $response = Response::json($data);
        $response->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
            	->header('Access-Control-Allow-Origin', '*')
            	->header('Access-Control-Allow-Headers', 'Content-Type');
		return $response;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /videos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /videos
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /videos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /videos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /videos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /videos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}