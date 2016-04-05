<?php



/**
 * This class defines the structure of the 'producto' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.aersa.map
 */
class ProductoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.ProductoTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('producto');
        $this->setPhpName('Producto');
        $this->setClassname('Producto');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproducto', 'Idproducto', 'INTEGER', true, null, null);
        $this->addColumn('producto_nombre', 'ProductoNombre', 'LONGVARCHAR', true, null, null);
        $this->addColumn('idcategoria', 'Idcategoria', 'INTEGER', false, null, null);
        $this->addColumn('idsubcategoria', 'Idsubcategoria', 'INTEGER', false, null, null);
        $this->addColumn('producto_rendimiento', 'ProductoRendimiento', 'INTEGER', false, null, null);
        $this->addColumn('producto_ultimocosto', 'ProductoUltimocosto', 'FLOAT', false, null, null);
        $this->addForeignKey('idunidadmedida', 'Idunidadmedida', 'INTEGER', 'unidadmedida', 'idunidadmedida', false, null, null);
        $this->addColumn('producto_baja', 'ProductoBaja', 'BOOLEAN', true, 1, null);
        $this->addColumn('producto_tipo', 'ProductoTipo', 'CHAR', true, null, null);
        $this->getColumn('producto_tipo', false)->setValueSet(array (
  0 => 'simple',
  1 => 'subreceta',
  2 => 'plu',
));
        $this->addColumn('producto_costo', 'ProductoCosto', 'FLOAT', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Unidadmedida', 'Unidadmedida', RelationMap::MANY_TO_ONE, array('idunidadmedida' => 'idunidadmedida', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Codigobarras', 'Codigobarras', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Codigobarrass');
        $this->addRelation('RecetaRelatedByIdproducto', 'Receta', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'RecetasRelatedByIdproducto');
        $this->addRelation('RecetaRelatedByIdproductoreceta', 'Receta', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproductoreceta', ), 'CASCADE', 'CASCADE', 'RecetasRelatedByIdproductoreceta');
    } // buildRelations()

} // ProductoTableMap
