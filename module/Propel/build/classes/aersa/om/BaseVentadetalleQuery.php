<?php


/**
 * Base class that represents a query for the 'ventadetalle' table.
 *
 *
 *
 * @method VentadetalleQuery orderByIdventadetalle($order = Criteria::ASC) Order by the idventadetalle column
 * @method VentadetalleQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method VentadetalleQuery orderByVentadetalleRevisada($order = Criteria::ASC) Order by the ventadetalle_revisada column
 * @method VentadetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 *
 * @method VentadetalleQuery groupByIdventadetalle() Group by the idventadetalle column
 * @method VentadetalleQuery groupByIdventa() Group by the idventa column
 * @method VentadetalleQuery groupByVentadetalleRevisada() Group by the ventadetalle_revisada column
 * @method VentadetalleQuery groupByIdproducto() Group by the idproducto column
 *
 * @method VentadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VentadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VentadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VentadetalleQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method VentadetalleQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method VentadetalleQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Ventadetalle findOne(PropelPDO $con = null) Return the first Ventadetalle matching the query
 * @method Ventadetalle findOneOrCreate(PropelPDO $con = null) Return the first Ventadetalle matching the query, or a new Ventadetalle object populated from the query conditions when no match is found
 *
 * @method Ventadetalle findOneByIdventa(int $idventa) Return the first Ventadetalle filtered by the idventa column
 * @method Ventadetalle findOneByVentadetalleRevisada(boolean $ventadetalle_revisada) Return the first Ventadetalle filtered by the ventadetalle_revisada column
 * @method Ventadetalle findOneByIdproducto(string $idproducto) Return the first Ventadetalle filtered by the idproducto column
 *
 * @method array findByIdventadetalle(int $idventadetalle) Return Ventadetalle objects filtered by the idventadetalle column
 * @method array findByIdventa(int $idventa) Return Ventadetalle objects filtered by the idventa column
 * @method array findByVentadetalleRevisada(boolean $ventadetalle_revisada) Return Ventadetalle objects filtered by the ventadetalle_revisada column
 * @method array findByIdproducto(string $idproducto) Return Ventadetalle objects filtered by the idproducto column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseVentadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVentadetalleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'aersa';
        }
        if (null === $modelName) {
            $modelName = 'Ventadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VentadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VentadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VentadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VentadetalleQuery) {
            return $criteria;
        }
        $query = new VentadetalleQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Ventadetalle|Ventadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VentadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Ventadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdventadetalle($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Ventadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idventadetalle`, `idventa`, `ventadetalle_revisada`, `idproducto` FROM `ventadetalle` WHERE `idventadetalle` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Ventadetalle();
            $obj->hydrate($row);
            VentadetallePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Ventadetalle|Ventadetalle[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Ventadetalle[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idventadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventadetalle(1234); // WHERE idventadetalle = 1234
     * $query->filterByIdventadetalle(array(12, 34)); // WHERE idventadetalle IN (12, 34)
     * $query->filterByIdventadetalle(array('min' => 12)); // WHERE idventadetalle >= 12
     * $query->filterByIdventadetalle(array('max' => 12)); // WHERE idventadetalle <= 12
     * </code>
     *
     * @param     mixed $idventadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdventadetalle($idventadetalle = null, $comparison = null)
    {
        if (is_array($idventadetalle)) {
            $useMinMax = false;
            if (isset($idventadetalle['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventadetalle['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle, $comparison);
    }

    /**
     * Filter the query on the idventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventa(1234); // WHERE idventa = 1234
     * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
     * $query->filterByIdventa(array('min' => 12)); // WHERE idventa >= 12
     * $query->filterByIdventa(array('max' => 12)); // WHERE idventa <= 12
     * </code>
     *
     * @see       filterByVenta()
     *
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleRevisada(true); // WHERE ventadetalle_revisada = true
     * $query->filterByVentadetalleRevisada('yes'); // WHERE ventadetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $ventadetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleRevisada($ventadetalleRevisada = null, $comparison = null)
    {
        if (is_string($ventadetalleRevisada)) {
            $ventadetalleRevisada = in_array(strtolower($ventadetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_REVISADA, $ventadetalleRevisada, $comparison);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproducto('fooValue');   // WHERE idproducto = 'fooValue'
     * $query->filterByIdproducto('%fooValue%'); // WHERE idproducto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idproducto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idproducto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idproducto)) {
                $idproducto = str_replace('*', '%', $idproducto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(VentadetallePeer::IDVENTA, $venta->getIdventa(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentadetallePeer::IDVENTA, $venta->toKeyValue('PrimaryKey', 'Idventa'), $comparison);
        } else {
            throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Venta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Venta');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Venta');
        }

        return $this;
    }

    /**
     * Use the Venta relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVenta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ventadetalle $ventadetalle Object to remove from the list of results
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function prune($ventadetalle = null)
    {
        if ($ventadetalle) {
            $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $ventadetalle->getIdventadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}