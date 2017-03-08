<?php 

namespace JobDesk\Traits;

use Response;

trait Crudable 
{

	/**
	 * create resource wrapper
	 * @param  array
	 * @return [type]
	 */
	public function createWith($model, $data)
	{
		return (isset($data) && is_array($data)) ? $model->create($data) : $this->error('error', 'model could not be created');
	}

	/**
	 * updating existing resource wrapper
	 * @param  array
	 * @return [type]
	 */
	public function updateWith($model, $data)
	{
		return (isset($data) && is_array($data)) ? $model->update($data) : $this->error('error', 'model could not be updated');
	}

	/**
	 * deleting existing resource wrapper
	 * @param  [type]
	 * @param  [type]
	 * @return [type]
	 */
	public function deleteWhere($model, $id)
	{
		$resource = $model->whereId($id)->firstOrFail();
		
		return (isset($id) && count($model) === 1) ? $model->delete() : $this->handleError('model was not found, could not delete model');
	}

	/**
	 * custom error handler
	 * @param  [type]
	 * @param  [type]
	 * @return [type]
	 */
	protected function error($subject, $error)
	{
		return Response::json([
			$subject => $error
		]);
	}

}


