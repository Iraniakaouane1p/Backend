<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{

        // src/Controller/CategoryController.php

    /**
     * @Route("/api/categories", name="get_categories", methods={"GET"})
     */
    public function getCategories(CategoryRepository $categoryRepository): JsonResponse
    {
        // Récupère toutes les catégories
        $categories = $categoryRepository->findAll();

        // Retourne les catégories au format JSON
        return $this->json($categories);
    }

    /**
     * @Route("/api/categories", name="create_category", methods={"POST"})
     */
    public function createCategory(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Vérifier si 'name' est présent dans la requête
        if (!isset($data['name']) || empty($data['name'])) {
            return $this->json(['error' => 'Category name is required'], 400);
        }

        $category = new Category();
        $category->setName($data['name']);

        // Persister l'entité Category dans la base de données
        $em->persist($category);
        $em->flush();

        return $this->json([
            'status' => 'Category created',
            'id' => $category->getId(),
            'name' => $category->getName(),
        ], 201);
    }

    /**
     * @Route("/api/categories/{id}", name="update_category", methods={"PUT"})
     */
    public function updateCategory(Request $request, Category $category, EntityManagerInterface $em): JsonResponse
    {
        if (!$category) {
            return $this->json(['error' => 'Category not found'], 404);
        }

        $data = json_decode($request->getContent(), true);

        if (isset($data['name'])) {
            $category->setName($data['name']);
        }

        $em->flush();

        return $this->json(['status' => 'Category updated'], 200);
    }

    /**
     * @Route("/api/categories/{id}", name="delete_category", methods={"DELETE"})
     */
    public function deleteCategory(Category $category, EntityManagerInterface $em): JsonResponse
    {
        if (!$category) {
            return $this->json(['error' => 'Category not found'], 404);
        }

        $em->remove($category);
        $em->flush();

        return $this->json(['status' => 'Category deleted'], 200);
    }
}
