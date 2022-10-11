<?php

namespace App\Controller\Api;

use App\Service\MathService;
use PHPUnit\Util\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Decimal\Decimal;
use Symfony\Component\HttpFoundation\Request;
use OpenApi\Annotations as OA;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @var MathService
     */
    protected $mathService;

    /**
     * AddController constructor.
     *
     * @param MathService $mathService
     */
    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    /**
     * @Route("/add/{a}/{b}", methods={"GET"})
     * @Route("/add/{a}/{b}/{c}", methods={"GET"})
     * @OA\Get(
     *      description="Add API Function"
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
     * @OA\Tag(name="Mathematical Add API")
     * @param Request $request
     * @return JsonResponse
     */
    public function add(Request $request): JsonResponse
    {
        return new JsonResponse([
            "total" => $this->mathService->add($request->get('a'), $request->get('b'), $request->get('c')),
        ], Response::HTTP_OK);
    }
}
