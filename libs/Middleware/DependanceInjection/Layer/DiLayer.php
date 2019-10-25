<?php
/**
 * DiLayer.php
 * Created by Bassirou NGOM.
 * User: bngesp <https://github.com/bngesp>
 * Licence: MIT
 * Date: 2019-04-11
 * Time: 12:34
 * Email: bassiroungom@esp.sn
 */

namespace Door\Core\DependanceInjection\Layer;


interface DiLayer
{

    /**
     * Returns a fully constructed object based on $name using $args and $share as constructor arguments if supplied
     * @param string name The name of the class to instantiate
     * @param array $args An array with any additional arguments to be passed into the constructor upon instantiation
     * @param array $share a list of defined in shareInstances for objects higher up the object graph, should only be used internally
     * @return object A fully constructed object based on the specified input arguments
     */
    public function create($name, array $args = [], array $share = []);



    /**
     * Returns a closure for creating object $name based on $rule, caching the reflection object for later use
     * @param string $name the Name of the class to get the closure for
     * @param array $rule The container can be fully configured using rules provided by associative arrays. See {@link https://r.je/dice.html#example3} for a description of the rules.
     * @return callable A closure
     */
    public function getClosure( $name, array $rule);


    /**
     * Looks for Dice::INSTANCE, Dice::GLOBAL or Dice::CONSTANT array keys in $param and when found returns an object based on the value see {@link https:// r.je/dice.html#example3-1}
     * @param mixed $param Either a string or an array,
     * @param array $share Array of instances from 'shareInstances', required for calls to `create`
     * @param bool $createFromString
     * @return mixed
     */
    public function expand($param, array $share = [],  $createFromString = false);


    /**
     * Returns a closure that generates arguments for $method based on $rule and any $args passed into the closure
     * @param object $method An instance of ReflectionMethod (see: {@link http:// php.net/manual/en/class.reflectionmethod.php})
     * @param array $rule The container can be fully configured using rules provided by associative arrays. See {@link https://r.je/dice.html#example3} for a description of the rules.
     * @return callable A closure that uses the cached information to generate the arguments for the method
     */
    public function getParams(\ReflectionMethod $method, array $rule);

}