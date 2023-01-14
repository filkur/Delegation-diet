<?php

namespace App\Controller;

use App\Constant\DelegationDietResponse;
use App\Service\DelegationDiet\DelegationDietServiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DelegationDietController
{
    /**
     * @param DelegationDietServiceInterface $delegationDietService
     */
    public function __construct(private readonly DelegationDietServiceInterface $delegationDietService)
    {
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): Response
    {
        return new JsonResponse([
            DelegationDietResponse::DELEGATION_DIET => $this->delegationDietService->getDelegationDiet(
                json_decode($request->getContent(), true)
            )
        ],
            Response::HTTP_OK);
    }
}
