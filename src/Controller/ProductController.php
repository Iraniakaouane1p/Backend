<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProductRepository;

class ProductController extends AbstractController
{
    
/**
     * @Route("/api/products", name="get_products", methods={"GET"})
     */
    public function getProducts(ProductRepository $productRepository): JsonResponse
    {
        try {
            $products = $productRepository->findAll();
            return $this->json($products);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Erreur de récupération des produits', 'message' => $e->getMessage()], 500);
        }
    }
    /**
     * @Route("/api/products", name="create_product", methods={"POST"})
     */
    public function createProduct(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Vérification des champs nécessaires
        if (!isset($data['name'], $data['description'], $data['price'], $data['categoryId'])) {
            return $this->json(['error' => 'Missing required fields'], 400);
        }

        // Créer le produit
        $product = new Product();
        $product->setName($data['name']);
        $product->setDescription($data['description']);
        $product->setPrice($data['price']);

        // Récupérer la catégorie
        $category = $em->getRepository(Category::class)->find($data['categoryId']);
        if (!$category) {
            return $this->json(['status' => 'Category not found'], 404);
        }
        $product->setCategory($category);

        // Sauvegarder le produit dans la base de données
        $em->persist($product);
        $em->flush();

        return $this->json([
            'status' => 'Product created',
            'id' => $product->getId(),
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'category' => $product->getCategory()->getName()
        ], 201);
    }

    /**
     * @Route("/api/products/{id}", name="update_product", methods={"PUT"})
     */
    public function updateProduct(Request $request, Product $product, EntityManagerInterface $em): JsonResponse
    {
        if (!$product) {
            return $this->json(['error' => 'Product not found'], 404);
        }

        $data = json_decode($request->getContent(), true);

        if (isset($data['name'])) {
            $product->setName($data['name']);
        }
        if (isset($data['description'])) {
            $product->setDescription($data['description']);
        }
        if (isset($data['price'])) {
            $product->setPrice($data['price']);
        }

        if (isset($data['categoryId'])) {
            $category = $em->getRepository(Category::class)->find($data['categoryId']);
            if ($category) {
                $product->setCategory($category);
            }
        }

        $em->flush();

        return $this->json(['status' => 'Product updated'], 200);
    }

    /**
     * @Route("/api/products/{id}", name="delete_product", methods={"DELETE"})
     */
    public function deleteProduct(Product $product, EntityManagerInterface $em): JsonResponse
    {
        if (!$product) {
            return $this->json(['error' => 'Product not found'], 404);
        }

        $em->remove($product);
        $em->flush();

        return $this->json(['status' => 'Product deleted'], 200);
    }
}
