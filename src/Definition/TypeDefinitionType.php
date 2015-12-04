<?php
/**
 * Date: 03.12.15
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\GraphQL\Definition;

use Youshido\GraphQL\Type\Config\TypeConfigInterface;
use Youshido\GraphQL\Definition\Traits\SchemaContainableTrait;

class TypeDefinitionType extends QueryType
{

    use SchemaContainableTrait;

    protected function build(TypeConfigInterface $config)
    {
        parent::build($config);

        $config->addArgument('name', 'string', ['required' => true]);
    }

    public function resolve($value = null, $args = [])
    {
        //todo
    }

    /**
     * @return String type name
     */
    public function getName()
    {
        return '__Type';
    }
}