<?php 
namespace TMW\Repositories\SpotRepository;

interface iSpotRepository {

	public function getList($limit = 0, $skip = 0);

	public function getNameEvalList($period = 0);

	public function checkNameIfExists($name ='', $region = 0);

	public function showSpot($id = 0);

	public function insertSpot($data = array());

	public function setLatLng($id, $lat, $lng);

	public function editSpot($id = 0, $arrValues = array());

	public function editSpotForPeriod($id = 0, $values = array());

	public function reviews();


}
