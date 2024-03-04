<?php
namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class ArrayToJsonTransformer implements DataTransformerInterface
{
    /**
     * Transforms the array to a string (JSON).
     *
     * @param mixed $array Array from the original form data
     *
     * @return mixed String (JSON) representation of the array
     */
    public function transform(mixed $array ) :mixed
    {
        if (null === $array) {
            return '[]';
        }

        return json_encode($array);
    }

    /**
     * Transforms a string (JSON) back to an array.
     *
     * @param mixed $json String (JSON) from the transformed form data
     *
     * @return mixed Array representation of the JSON
     */
    public function reverseTransform(mixed $json ) : mixed
    {
        if (!$json) {
            return [];
        }

        $array = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new TransformationFailedException('Invalid JSON.');
        }

        return $array;
    }
}
?>