<?php

namespace Tiplap\Filters;
use Tiplap\Filters\Traits\BasePaginatedFilterTrait;

/**
 * Abstract filter for paginating result
 *
 * @author Pecina Ondřej <pecina.ondrej@gmail.com>
 */
abstract class BasePaginatedFilter extends BaseFilter implements IFilter
{

	use BasePaginatedFilterTrait;

	/**
	 * Populate filter form array
	 *
	 * @param array $data
	 */
	public function __construct(array $data = array())
	{
		if (isset($data->offset)) {
			/** @noinspection PhpUndefinedFieldInspection */
			$this->offset = $data->offset;
		}

		if (isset($data->limit)) {
			/** @noinspection PhpUndefinedFieldInspection */
			$this->offset = $data->limit;
		}

		parent::__construct($data);
	}
}