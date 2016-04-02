<?php

class ShowsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /shows
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Show::all();
		return $this->setCustomHeaders($data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /shows/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /shows
	 *
	 * @return Response
	 */
	public function store()
	{
		$show = Show::find($id);
		return $this->setCustomHeaders($show);
	}

	/**
	 * Display the specified resource.
	 * GET /shows/{id}
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
	 * GET /shows/{id}/edit
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
	 * PUT /shows/{id}
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
	 * DELETE /shows/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}