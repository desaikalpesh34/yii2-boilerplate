<?php

namespace frontend\models;

use Yii;
use common\models\RgnPostcode as BasePostcode;
use frontend\models\operation\RgnPostcodeOperation;

/**
 * Description of RgnPostcode
 *
 * @author fredy
 *
 * @property \frontend\models\RgnCountry $country
 * @property \frontend\models\RgnProvince $province
 * @property \frontend\models\RgnCity $city
 * @property \frontend\models\RgnDistrict $district
 * @property \frontend\models\RgnSubdistrict $subdistrict
 */
class RgnPostcode extends BasePostcode
{

	public function init()
	{
		parent::init();

		$this->operation = new RgnPostcodeOperation([
			'model' => $this
		]);

	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCity()
	{
		return $this->hasOne(\frontend\models\RgnCity::className(), ['id' => 'city_id']);

	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCountry()
	{
		return $this->hasOne(\frontend\models\RgnCountry::className(), ['id' => 'country_id']);

	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getDistrict()
	{
		return $this->hasOne(\frontend\models\RgnDistrict::className(), ['id' => 'district_id']);

	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProvince()
	{
		return $this->hasOne(\frontend\models\RgnProvince::className(), ['id' => 'province_id']);

	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getSubdistrict()
	{
		return $this->hasOne(\frontend\models\RgnSubdistrict::className(), ['id' => 'subdistrict_id']);

	}

}
