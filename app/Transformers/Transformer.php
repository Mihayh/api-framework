<?php
/**
 * Base Transformer Class
 */

namespace App\Transformers;

/**
 * Maps the database information for the API
 */
abstract class Transformer {

	/**
	 * Transform a list of items
	 *
	 * @param 	array 			$items 			the list of items that needs to be transformed
	 *
	 * @return 	array
	 */
	public function transformCollection(array $items) {
		return array_map([$this, 'transform'], $items);
	}

	/**
	 * Transform an item
	 *
	 * @param  	array 			$item 			the item information
	 *
	 * @return 	array
	 */
	public abstract function transform($item);
}
