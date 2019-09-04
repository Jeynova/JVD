<?php

namespace App\Repository;

use App\Entity\Artist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class AdminRepository {

    function toJoinDQL($manager, $table1, $table2, array $array,$groupBy =null,  $orderBy = null, $ad = null,$where = null, $param = null) {

        $args = implode(",", $array);

        $request = 'SELECT '.$args.' FROM '.$table1.' a JOIN a.'.$table2.' b ';

        if ($where != null) {
            $request .= 'WHERE '.$where.' LIKE :param1';
        }

        if ($groupBy != "") {
            # code...
            $request .=  ' GROUP BY '.$groupBy;
        }

        if($orderBy != null) {
            $ad = ($ad != null) ? $ad : "ASC" ;
            $request .= ' ORDER BY '.$orderBy.' '.$ad;
        }

        $query = $manager -> createQuery($request);
        if ($param != null) {
            $query -> setParameter('param1', '%'.$param.'%');
        }
        $result = $query->getResult();

        return $result;
    }

    function toDQL($manager, $table1, array $array, $where = null, $param = null, $groupBy = null, $orderBy = null, $ad = null) {

        $args = implode(",", $array);

        $request = 'SELECT '.$args.' FROM '.$table1.' a ';
        
        if ($where != null) {
            $request .= 'WHERE '.$where.' = ?0';
        }

        if ($groupBy != null) {
            # code...
            $request .=  'GROUP BY '.$groupBy;
        }

        if($orderBy != null) {
            $ad = ($ad != null) ? $ad : "ASC" ;
            $request .= ' ORDER BY '.$orderBy.' '.$ad;
        }

        $query = $manager -> createQuery($request);
        
        $result = $query->getResult();

        return $result;
    }

}