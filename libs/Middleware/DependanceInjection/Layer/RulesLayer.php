<?php
/**
 * ServiceLayer.php
 * Created by Bassirou NGOM.
 * User: bngesp <https://github.com/bngesp>
 * Licence: MIT
 * Date: 2019-04-11
 * Time: 12:24
 * Email: bassiroungom@esp.sn
 */

namespace Door\Core\DependanceInjection\Layer;


interface RulesLayer
{


    /**
     * Add a rule $rule to the class $name
     * @param string $name The name of the class to add the rule for
     * @param array $rule The container can be fully configured using rules provided by associative arrays. See {@link https://r.je/dice.html#example3} for a description of the rules.
     */
    public function addRule($name, array $rule);



    /**
     * Add rules as array. Useful for JSON loading $dice->addRules(json_decode(file_get_contents('foo.json'));
     * @param array Rules in a single array [name => $rule] format
     */
    public function addRules(array $rules);


    /**
     * Returns the rule that will be applied to the class $name when calling create()
     * @param string name The name of the class to get the rules for
     * @return array The rules for the specified class
     */
    public function getRule($name);
}