<?php

class Property
{
    /**
     * @OA\Get(
     *   tags={"Property"},
     *   path="/properties",
     *   summary="Property list information",
     *   @OA\Response(
     *       response=200,
     *       description="Property response",
     *       @OA\JsonContent(ref="#/components/schemas/Property")
     *   ),
     *   @OA\Response(response=401, description="Unauthorized"),
     *   @OA\Response(response=404, description="Not Found")
     * )
     */
}