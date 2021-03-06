<?php


/**
 * Base class that represents a query for the 'ingreso' table.
 *
 *
 *
 * @method IngresoQuery orderByIdingreso($order = Criteria::ASC) Order by the idingreso column
 * @method IngresoQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method IngresoQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method IngresoQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method IngresoQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method IngresoQuery orderByIngresoFolio($order = Criteria::ASC) Order by the ingreso_folio column
 * @method IngresoQuery orderByIngresoRevisada($order = Criteria::ASC) Order by the ingreso_revisada column
 * @method IngresoQuery orderByIngresoTotalalimento($order = Criteria::ASC) Order by the ingreso_totalalimento column
 * @method IngresoQuery orderByIngresoTotalbebida($order = Criteria::ASC) Order by the ingreso_totalbebida column
 * @method IngresoQuery orderByIngresoTotalmiscelanea($order = Criteria::ASC) Order by the ingreso_totalmiscelanea column
 * @method IngresoQuery orderByIngresoFecha($order = Criteria::ASC) Order by the ingreso_fecha column
 * @method IngresoQuery orderByIngresoFechacreacion($order = Criteria::ASC) Order by the ingreso_fechacreacion column
 * @method IngresoQuery orderByNotaauditorempresa($order = Criteria::ASC) Order by the notaauditorempresa column
 * @method IngresoQuery orderByNotaalmacenistaempresa($order = Criteria::ASC) Order by the notaalmacenistaempresa column
 * @method IngresoQuery orderByNotaauditoraersa($order = Criteria::ASC) Order by the notaauditoraersa column
 *
 * @method IngresoQuery groupByIdingreso() Group by the idingreso column
 * @method IngresoQuery groupByIdempresa() Group by the idempresa column
 * @method IngresoQuery groupByIdsucursal() Group by the idsucursal column
 * @method IngresoQuery groupByIdusuario() Group by the idusuario column
 * @method IngresoQuery groupByIdauditor() Group by the idauditor column
 * @method IngresoQuery groupByIngresoFolio() Group by the ingreso_folio column
 * @method IngresoQuery groupByIngresoRevisada() Group by the ingreso_revisada column
 * @method IngresoQuery groupByIngresoTotalalimento() Group by the ingreso_totalalimento column
 * @method IngresoQuery groupByIngresoTotalbebida() Group by the ingreso_totalbebida column
 * @method IngresoQuery groupByIngresoTotalmiscelanea() Group by the ingreso_totalmiscelanea column
 * @method IngresoQuery groupByIngresoFecha() Group by the ingreso_fecha column
 * @method IngresoQuery groupByIngresoFechacreacion() Group by the ingreso_fechacreacion column
 * @method IngresoQuery groupByNotaauditorempresa() Group by the notaauditorempresa column
 * @method IngresoQuery groupByNotaalmacenistaempresa() Group by the notaalmacenistaempresa column
 * @method IngresoQuery groupByNotaauditoraersa() Group by the notaauditoraersa column
 *
 * @method IngresoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method IngresoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method IngresoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method IngresoQuery leftJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method IngresoQuery rightJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method IngresoQuery innerJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 *
 * @method IngresoQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method IngresoQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method IngresoQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method IngresoQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method IngresoQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method IngresoQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method IngresoQuery leftJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method IngresoQuery rightJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method IngresoQuery innerJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 *
 * @method IngresoQuery leftJoinFlujoefectivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Flujoefectivo relation
 * @method IngresoQuery rightJoinFlujoefectivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Flujoefectivo relation
 * @method IngresoQuery innerJoinFlujoefectivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Flujoefectivo relation
 *
 * @method IngresoQuery leftJoinIngresodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingresodetalle relation
 * @method IngresoQuery rightJoinIngresodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingresodetalle relation
 * @method IngresoQuery innerJoinIngresodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingresodetalle relation
 *
 * @method IngresoQuery leftJoinIngresonota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingresonota relation
 * @method IngresoQuery rightJoinIngresonota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingresonota relation
 * @method IngresoQuery innerJoinIngresonota($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingresonota relation
 *
 * @method Ingreso findOne(PropelPDO $con = null) Return the first Ingreso matching the query
 * @method Ingreso findOneOrCreate(PropelPDO $con = null) Return the first Ingreso matching the query, or a new Ingreso object populated from the query conditions when no match is found
 *
 * @method Ingreso findOneByIdempresa(int $idempresa) Return the first Ingreso filtered by the idempresa column
 * @method Ingreso findOneByIdsucursal(int $idsucursal) Return the first Ingreso filtered by the idsucursal column
 * @method Ingreso findOneByIdusuario(int $idusuario) Return the first Ingreso filtered by the idusuario column
 * @method Ingreso findOneByIdauditor(int $idauditor) Return the first Ingreso filtered by the idauditor column
 * @method Ingreso findOneByIngresoFolio(string $ingreso_folio) Return the first Ingreso filtered by the ingreso_folio column
 * @method Ingreso findOneByIngresoRevisada(boolean $ingreso_revisada) Return the first Ingreso filtered by the ingreso_revisada column
 * @method Ingreso findOneByIngresoTotalalimento(string $ingreso_totalalimento) Return the first Ingreso filtered by the ingreso_totalalimento column
 * @method Ingreso findOneByIngresoTotalbebida(string $ingreso_totalbebida) Return the first Ingreso filtered by the ingreso_totalbebida column
 * @method Ingreso findOneByIngresoTotalmiscelanea(string $ingreso_totalmiscelanea) Return the first Ingreso filtered by the ingreso_totalmiscelanea column
 * @method Ingreso findOneByIngresoFecha(string $ingreso_fecha) Return the first Ingreso filtered by the ingreso_fecha column
 * @method Ingreso findOneByIngresoFechacreacion(string $ingreso_fechacreacion) Return the first Ingreso filtered by the ingreso_fechacreacion column
 * @method Ingreso findOneByNotaauditorempresa(boolean $notaauditorempresa) Return the first Ingreso filtered by the notaauditorempresa column
 * @method Ingreso findOneByNotaalmacenistaempresa(boolean $notaalmacenistaempresa) Return the first Ingreso filtered by the notaalmacenistaempresa column
 * @method Ingreso findOneByNotaauditoraersa(boolean $notaauditoraersa) Return the first Ingreso filtered by the notaauditoraersa column
 *
 * @method array findByIdingreso(int $idingreso) Return Ingreso objects filtered by the idingreso column
 * @method array findByIdempresa(int $idempresa) Return Ingreso objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Ingreso objects filtered by the idsucursal column
 * @method array findByIdusuario(int $idusuario) Return Ingreso objects filtered by the idusuario column
 * @method array findByIdauditor(int $idauditor) Return Ingreso objects filtered by the idauditor column
 * @method array findByIngresoFolio(string $ingreso_folio) Return Ingreso objects filtered by the ingreso_folio column
 * @method array findByIngresoRevisada(boolean $ingreso_revisada) Return Ingreso objects filtered by the ingreso_revisada column
 * @method array findByIngresoTotalalimento(string $ingreso_totalalimento) Return Ingreso objects filtered by the ingreso_totalalimento column
 * @method array findByIngresoTotalbebida(string $ingreso_totalbebida) Return Ingreso objects filtered by the ingreso_totalbebida column
 * @method array findByIngresoTotalmiscelanea(string $ingreso_totalmiscelanea) Return Ingreso objects filtered by the ingreso_totalmiscelanea column
 * @method array findByIngresoFecha(string $ingreso_fecha) Return Ingreso objects filtered by the ingreso_fecha column
 * @method array findByIngresoFechacreacion(string $ingreso_fechacreacion) Return Ingreso objects filtered by the ingreso_fechacreacion column
 * @method array findByNotaauditorempresa(boolean $notaauditorempresa) Return Ingreso objects filtered by the notaauditorempresa column
 * @method array findByNotaalmacenistaempresa(boolean $notaalmacenistaempresa) Return Ingreso objects filtered by the notaalmacenistaempresa column
 * @method array findByNotaauditoraersa(boolean $notaauditoraersa) Return Ingreso objects filtered by the notaauditoraersa column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseIngresoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseIngresoQuery object.
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
            $modelName = 'Ingreso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IngresoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   IngresoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return IngresoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IngresoQuery) {
            return $criteria;
        }
        $query = new IngresoQuery(null, null, $modelAlias);

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
     * @return   Ingreso|Ingreso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = IngresoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(IngresoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ingreso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdingreso($key, $con = null)
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
     * @return                 Ingreso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idingreso`, `idempresa`, `idsucursal`, `idusuario`, `idauditor`, `ingreso_folio`, `ingreso_revisada`, `ingreso_totalalimento`, `ingreso_totalbebida`, `ingreso_totalmiscelanea`, `ingreso_fecha`, `ingreso_fechacreacion`, `notaauditorempresa`, `notaalmacenistaempresa`, `notaauditoraersa` FROM `ingreso` WHERE `idingreso` = :p0';
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
            $obj = new Ingreso();
            $obj->hydrate($row);
            IngresoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ingreso|Ingreso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ingreso[]|mixed the list of results, formatted by the current formatter
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
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(IngresoPeer::IDINGRESO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(IngresoPeer::IDINGRESO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdingreso(1234); // WHERE idingreso = 1234
     * $query->filterByIdingreso(array(12, 34)); // WHERE idingreso IN (12, 34)
     * $query->filterByIdingreso(array('min' => 12)); // WHERE idingreso >= 12
     * $query->filterByIdingreso(array('max' => 12)); // WHERE idingreso <= 12
     * </code>
     *
     * @param     mixed $idingreso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIdingreso($idingreso = null, $comparison = null)
    {
        if (is_array($idingreso)) {
            $useMinMax = false;
            if (isset($idingreso['min'])) {
                $this->addUsingAlias(IngresoPeer::IDINGRESO, $idingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idingreso['max'])) {
                $this->addUsingAlias(IngresoPeer::IDINGRESO, $idingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::IDINGRESO, $idingreso, $comparison);
    }

    /**
     * Filter the query on the idempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempresa(1234); // WHERE idempresa = 1234
     * $query->filterByIdempresa(array(12, 34)); // WHERE idempresa IN (12, 34)
     * $query->filterByIdempresa(array('min' => 12)); // WHERE idempresa >= 12
     * $query->filterByIdempresa(array('max' => 12)); // WHERE idempresa <= 12
     * </code>
     *
     * @see       filterByEmpresa()
     *
     * @param     mixed $idempresa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(IngresoPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(IngresoPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query on the idsucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursal(1234); // WHERE idsucursal = 1234
     * $query->filterByIdsucursal(array(12, 34)); // WHERE idsucursal IN (12, 34)
     * $query->filterByIdsucursal(array('min' => 12)); // WHERE idsucursal >= 12
     * $query->filterByIdsucursal(array('max' => 12)); // WHERE idsucursal <= 12
     * </code>
     *
     * @see       filterBySucursal()
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(IngresoPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(IngresoPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the idusuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdusuario(1234); // WHERE idusuario = 1234
     * $query->filterByIdusuario(array(12, 34)); // WHERE idusuario IN (12, 34)
     * $query->filterByIdusuario(array('min' => 12)); // WHERE idusuario >= 12
     * $query->filterByIdusuario(array('max' => 12)); // WHERE idusuario <= 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByIdusuario()
     *
     * @param     mixed $idusuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(IngresoPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(IngresoPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idauditor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdauditor(1234); // WHERE idauditor = 1234
     * $query->filterByIdauditor(array(12, 34)); // WHERE idauditor IN (12, 34)
     * $query->filterByIdauditor(array('min' => 12)); // WHERE idauditor >= 12
     * $query->filterByIdauditor(array('max' => 12)); // WHERE idauditor <= 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByIdauditor()
     *
     * @param     mixed $idauditor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIdauditor($idauditor = null, $comparison = null)
    {
        if (is_array($idauditor)) {
            $useMinMax = false;
            if (isset($idauditor['min'])) {
                $this->addUsingAlias(IngresoPeer::IDAUDITOR, $idauditor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idauditor['max'])) {
                $this->addUsingAlias(IngresoPeer::IDAUDITOR, $idauditor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::IDAUDITOR, $idauditor, $comparison);
    }

    /**
     * Filter the query on the ingreso_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresoFolio('fooValue');   // WHERE ingreso_folio = 'fooValue'
     * $query->filterByIngresoFolio('%fooValue%'); // WHERE ingreso_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ingresoFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIngresoFolio($ingresoFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ingresoFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ingresoFolio)) {
                $ingresoFolio = str_replace('*', '%', $ingresoFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IngresoPeer::INGRESO_FOLIO, $ingresoFolio, $comparison);
    }

    /**
     * Filter the query on the ingreso_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresoRevisada(true); // WHERE ingreso_revisada = true
     * $query->filterByIngresoRevisada('yes'); // WHERE ingreso_revisada = true
     * </code>
     *
     * @param     boolean|string $ingresoRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIngresoRevisada($ingresoRevisada = null, $comparison = null)
    {
        if (is_string($ingresoRevisada)) {
            $ingresoRevisada = in_array(strtolower($ingresoRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(IngresoPeer::INGRESO_REVISADA, $ingresoRevisada, $comparison);
    }

    /**
     * Filter the query on the ingreso_totalalimento column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresoTotalalimento(1234); // WHERE ingreso_totalalimento = 1234
     * $query->filterByIngresoTotalalimento(array(12, 34)); // WHERE ingreso_totalalimento IN (12, 34)
     * $query->filterByIngresoTotalalimento(array('min' => 12)); // WHERE ingreso_totalalimento >= 12
     * $query->filterByIngresoTotalalimento(array('max' => 12)); // WHERE ingreso_totalalimento <= 12
     * </code>
     *
     * @param     mixed $ingresoTotalalimento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIngresoTotalalimento($ingresoTotalalimento = null, $comparison = null)
    {
        if (is_array($ingresoTotalalimento)) {
            $useMinMax = false;
            if (isset($ingresoTotalalimento['min'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_TOTALALIMENTO, $ingresoTotalalimento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresoTotalalimento['max'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_TOTALALIMENTO, $ingresoTotalalimento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::INGRESO_TOTALALIMENTO, $ingresoTotalalimento, $comparison);
    }

    /**
     * Filter the query on the ingreso_totalbebida column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresoTotalbebida(1234); // WHERE ingreso_totalbebida = 1234
     * $query->filterByIngresoTotalbebida(array(12, 34)); // WHERE ingreso_totalbebida IN (12, 34)
     * $query->filterByIngresoTotalbebida(array('min' => 12)); // WHERE ingreso_totalbebida >= 12
     * $query->filterByIngresoTotalbebida(array('max' => 12)); // WHERE ingreso_totalbebida <= 12
     * </code>
     *
     * @param     mixed $ingresoTotalbebida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIngresoTotalbebida($ingresoTotalbebida = null, $comparison = null)
    {
        if (is_array($ingresoTotalbebida)) {
            $useMinMax = false;
            if (isset($ingresoTotalbebida['min'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_TOTALBEBIDA, $ingresoTotalbebida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresoTotalbebida['max'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_TOTALBEBIDA, $ingresoTotalbebida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::INGRESO_TOTALBEBIDA, $ingresoTotalbebida, $comparison);
    }

    /**
     * Filter the query on the ingreso_totalmiscelanea column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresoTotalmiscelanea(1234); // WHERE ingreso_totalmiscelanea = 1234
     * $query->filterByIngresoTotalmiscelanea(array(12, 34)); // WHERE ingreso_totalmiscelanea IN (12, 34)
     * $query->filterByIngresoTotalmiscelanea(array('min' => 12)); // WHERE ingreso_totalmiscelanea >= 12
     * $query->filterByIngresoTotalmiscelanea(array('max' => 12)); // WHERE ingreso_totalmiscelanea <= 12
     * </code>
     *
     * @param     mixed $ingresoTotalmiscelanea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIngresoTotalmiscelanea($ingresoTotalmiscelanea = null, $comparison = null)
    {
        if (is_array($ingresoTotalmiscelanea)) {
            $useMinMax = false;
            if (isset($ingresoTotalmiscelanea['min'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_TOTALMISCELANEA, $ingresoTotalmiscelanea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresoTotalmiscelanea['max'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_TOTALMISCELANEA, $ingresoTotalmiscelanea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::INGRESO_TOTALMISCELANEA, $ingresoTotalmiscelanea, $comparison);
    }

    /**
     * Filter the query on the ingreso_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresoFecha('2011-03-14'); // WHERE ingreso_fecha = '2011-03-14'
     * $query->filterByIngresoFecha('now'); // WHERE ingreso_fecha = '2011-03-14'
     * $query->filterByIngresoFecha(array('max' => 'yesterday')); // WHERE ingreso_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ingresoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIngresoFecha($ingresoFecha = null, $comparison = null)
    {
        if (is_array($ingresoFecha)) {
            $useMinMax = false;
            if (isset($ingresoFecha['min'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_FECHA, $ingresoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresoFecha['max'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_FECHA, $ingresoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::INGRESO_FECHA, $ingresoFecha, $comparison);
    }

    /**
     * Filter the query on the ingreso_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresoFechacreacion('2011-03-14'); // WHERE ingreso_fechacreacion = '2011-03-14'
     * $query->filterByIngresoFechacreacion('now'); // WHERE ingreso_fechacreacion = '2011-03-14'
     * $query->filterByIngresoFechacreacion(array('max' => 'yesterday')); // WHERE ingreso_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $ingresoFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByIngresoFechacreacion($ingresoFechacreacion = null, $comparison = null)
    {
        if (is_array($ingresoFechacreacion)) {
            $useMinMax = false;
            if (isset($ingresoFechacreacion['min'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_FECHACREACION, $ingresoFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresoFechacreacion['max'])) {
                $this->addUsingAlias(IngresoPeer::INGRESO_FECHACREACION, $ingresoFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresoPeer::INGRESO_FECHACREACION, $ingresoFechacreacion, $comparison);
    }

    /**
     * Filter the query on the notaauditorempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaauditorempresa(true); // WHERE notaauditorempresa = true
     * $query->filterByNotaauditorempresa('yes'); // WHERE notaauditorempresa = true
     * </code>
     *
     * @param     boolean|string $notaauditorempresa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByNotaauditorempresa($notaauditorempresa = null, $comparison = null)
    {
        if (is_string($notaauditorempresa)) {
            $notaauditorempresa = in_array(strtolower($notaauditorempresa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(IngresoPeer::NOTAAUDITOREMPRESA, $notaauditorempresa, $comparison);
    }

    /**
     * Filter the query on the notaalmacenistaempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaalmacenistaempresa(true); // WHERE notaalmacenistaempresa = true
     * $query->filterByNotaalmacenistaempresa('yes'); // WHERE notaalmacenistaempresa = true
     * </code>
     *
     * @param     boolean|string $notaalmacenistaempresa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByNotaalmacenistaempresa($notaalmacenistaempresa = null, $comparison = null)
    {
        if (is_string($notaalmacenistaempresa)) {
            $notaalmacenistaempresa = in_array(strtolower($notaalmacenistaempresa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(IngresoPeer::NOTAALMACENISTAEMPRESA, $notaalmacenistaempresa, $comparison);
    }

    /**
     * Filter the query on the notaauditoraersa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaauditoraersa(true); // WHERE notaauditoraersa = true
     * $query->filterByNotaauditoraersa('yes'); // WHERE notaauditoraersa = true
     * </code>
     *
     * @param     boolean|string $notaauditoraersa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function filterByNotaauditoraersa($notaauditoraersa = null, $comparison = null)
    {
        if (is_string($notaauditoraersa)) {
            $notaauditoraersa = in_array(strtolower($notaauditoraersa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(IngresoPeer::NOTAAUDITORAERSA, $notaauditoraersa, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdauditor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(IngresoPeer::IDAUDITOR, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresoPeer::IDAUDITOR, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByIdauditor() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdauditor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByIdauditor');

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
            $this->addJoinObject($join, 'UsuarioRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByIdauditor relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdauditor', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(IngresoPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresoPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
        } else {
            throw new PropelException('filterByEmpresa() only accepts arguments of type Empresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empresa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function joinEmpresa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empresa');

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
            $this->addJoinObject($join, 'Empresa');
        }

        return $this;
    }

    /**
     * Use the Empresa relation Empresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresaQuery A secondary query class using the current class as primary query
     */
    public function useEmpresaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empresa', 'EmpresaQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(IngresoPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresoPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursal() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function joinSucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursal');

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
            $this->addJoinObject($join, 'Sucursal');
        }

        return $this;
    }

    /**
     * Use the Sucursal relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursal', 'SucursalQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdusuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(IngresoPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresoPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByIdusuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByIdusuario');

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
            $this->addJoinObject($join, 'UsuarioRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByIdusuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdusuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Flujoefectivo object
     *
     * @param   Flujoefectivo|PropelObjectCollection $flujoefectivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFlujoefectivo($flujoefectivo, $comparison = null)
    {
        if ($flujoefectivo instanceof Flujoefectivo) {
            return $this
                ->addUsingAlias(IngresoPeer::IDINGRESO, $flujoefectivo->getIdingreso(), $comparison);
        } elseif ($flujoefectivo instanceof PropelObjectCollection) {
            return $this
                ->useFlujoefectivoQuery()
                ->filterByPrimaryKeys($flujoefectivo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFlujoefectivo() only accepts arguments of type Flujoefectivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Flujoefectivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function joinFlujoefectivo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Flujoefectivo');

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
            $this->addJoinObject($join, 'Flujoefectivo');
        }

        return $this;
    }

    /**
     * Use the Flujoefectivo relation Flujoefectivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FlujoefectivoQuery A secondary query class using the current class as primary query
     */
    public function useFlujoefectivoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFlujoefectivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Flujoefectivo', 'FlujoefectivoQuery');
    }

    /**
     * Filter the query by a related Ingresodetalle object
     *
     * @param   Ingresodetalle|PropelObjectCollection $ingresodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngresodetalle($ingresodetalle, $comparison = null)
    {
        if ($ingresodetalle instanceof Ingresodetalle) {
            return $this
                ->addUsingAlias(IngresoPeer::IDINGRESO, $ingresodetalle->getIdingreso(), $comparison);
        } elseif ($ingresodetalle instanceof PropelObjectCollection) {
            return $this
                ->useIngresodetalleQuery()
                ->filterByPrimaryKeys($ingresodetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByIngresodetalle() only accepts arguments of type Ingresodetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ingresodetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function joinIngresodetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ingresodetalle');

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
            $this->addJoinObject($join, 'Ingresodetalle');
        }

        return $this;
    }

    /**
     * Use the Ingresodetalle relation Ingresodetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   IngresodetalleQuery A secondary query class using the current class as primary query
     */
    public function useIngresodetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinIngresodetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ingresodetalle', 'IngresodetalleQuery');
    }

    /**
     * Filter the query by a related Ingresonota object
     *
     * @param   Ingresonota|PropelObjectCollection $ingresonota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngresonota($ingresonota, $comparison = null)
    {
        if ($ingresonota instanceof Ingresonota) {
            return $this
                ->addUsingAlias(IngresoPeer::IDINGRESO, $ingresonota->getIdingreso(), $comparison);
        } elseif ($ingresonota instanceof PropelObjectCollection) {
            return $this
                ->useIngresonotaQuery()
                ->filterByPrimaryKeys($ingresonota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByIngresonota() only accepts arguments of type Ingresonota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ingresonota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function joinIngresonota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ingresonota');

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
            $this->addJoinObject($join, 'Ingresonota');
        }

        return $this;
    }

    /**
     * Use the Ingresonota relation Ingresonota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   IngresonotaQuery A secondary query class using the current class as primary query
     */
    public function useIngresonotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinIngresonota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ingresonota', 'IngresonotaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ingreso $ingreso Object to remove from the list of results
     *
     * @return IngresoQuery The current query, for fluid interface
     */
    public function prune($ingreso = null)
    {
        if ($ingreso) {
            $this->addUsingAlias(IngresoPeer::IDINGRESO, $ingreso->getIdingreso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
