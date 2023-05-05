<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá, mundo!');
    }

    #[Route('/dinossauro')]
    public function dinossauro(): Response
    {
        return new Response('Olá, dinossauro!');
    }

    #[Route('/mamifero')]
    public function mamifero(): Response
    {
        return new Response('Olá, mamifero!');
    }

    #[Route('/invertebrados')]
    public function invertebrados(): Response
    {
        return new Response('Olá, invertebrados!');
    }

    #[Route('/insetos')]
    public function insetos(): Response
    {
        return new Response('Olá, insetos!');
    }

    #[Route('/aves')]
    public function aves(): Response
    {
        return new Response('Olá, aves!');
    }

    #[Route('/felinos')]
    public function felinos(): Response
    {
        return new Response('Olá, felinos!');
    }

    #[Route('/caninos')]
    public function caninos(): Response
    {
        return new Response('Olá, caninos!');
    }

    #[Route('/roedores')]
    public function roedores(): Response
    {
        return new Response('Olá, roedores!');
    }
}
