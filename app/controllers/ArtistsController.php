<?php

class ArtistsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /artists
	 *
	 * @return Response
	 */
	public function index()
	{
		$response = Response::json(Artist::all());
		$response->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
			->header('Access-Control-Allow-Origin', '*')
			->header('Access-Control-Allow-Headers', 'Content-Type');
		return $response;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /artists/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /artists
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /artists/{id}
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
	 * GET /artists/{id}/edit
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
	 * PUT /artists/{id}
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
	 * DELETE /artists/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}