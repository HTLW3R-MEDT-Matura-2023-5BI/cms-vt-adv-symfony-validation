<?php

namespace App\Repository;

use App\Entity\Movie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Movie>
 *
 * @method Movie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Movie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Movie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Movie::class);
    }

    public function save(Movie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Movie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAll(): array
    {
        return $this->findBy(array(), array('name' => 'ASC'));
    }

    /**
     * @return Movie[] Returns an array of Movie objects
     */
    public function findByMovieNameIgnoreCase($searchTerm): array
    {
        $movies = $this->createQueryBuilder('m')
            ->orderBy('m.name', 'ASC')
            ->getQuery()
            ->getResult();

        $movieArray = array();

        foreach ($movies as $movie) {
            similar_text($movie->getName(), $searchTerm, $similarity);
            if ($similarity > 90) {
                $movieArray[] = $movie;
            }
        }

        return $movieArray;
    }

    /**
     * @throws Exception
     */
    public function getRandomMovie($count)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM movie m
            ORDER BY RANDOM()
            LIMIT ' . $count;

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        return $resultSet->fetchAllAssociative();
    }
}
