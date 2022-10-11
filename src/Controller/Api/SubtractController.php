<?php

namespace App\Controller\Api;

use App\Service\MathService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OpenApi\Annotations as OA;
use Symfony\Component\Routing\Annotation\Route;

class SubtractController extends AbstractController
{
    /**
     * @var MathService
     */
    protected $mathService;

    /**
     * SubtractController constructor.
     *
     * @param MathService $mathService
     */
    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    /**
     * @Route("/sub/{a}/{b}", methods={"GET"})
     * @OA\Get(
     *      description="Subtract API Function"
     * )
     * @OA\Response(
     *     response="200",
     *     description="OK",
     *     content={
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="total",
     *                      type="string",
     *                      description="Value after calculation"
     *                  )
     *              )
     *          )
     *     }
     * )
     * @OA\Tag(name="Mathematical Subtract API")
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse([
            "total" => $this->mathService->subtract($request->get('a'), $request->get('b')),
        ], Response::HTTP_OK);
    }
}
