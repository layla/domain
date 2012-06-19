<?php

use Domain\Models\Role;

class Domain_V1_Role_Controller extends Domain_Base_Controller {
	
	public function __construct()
	{
		$this->model = new Role;

		$this->multilanguage = true;
	}

	/**
	 * Get all roles
	 *
	 * @return Response
	 */
	public function get_role_all()
	{
		$this->settings['sortable'] = array(
			'roles' => array(
				'name'
			)
		);

		return $this->get_multiple(Input::all());
	}

	/**
	 * Get role by id
	 *
	 * @return Response
	 */
	public function get_role($id)
	{
		return $this->get_single($id);
	}

	/**
	 * Add role
	 *
	 * @return Response
	 */
	public function post_role()
	{
		$role = $this->model();

		return $this->create_single(Input::all());
	}

	/**
	 * Edit role
	 *
	 * @return Response
	 */
	public function put_role($id)
	{
		// Find the role we are updating
		$role = $this->model($id);

		return $this->update_single(Input::all());
	}

	/**
	 * Delete role
	 *
	 * @return Response
	 */
	public function delete_role($id)
	{
		$this->model($id);

		$this->delete_single();
	}

}