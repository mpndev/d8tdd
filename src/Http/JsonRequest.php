<?php

namespace MPNDEV\D8TDD\Http;

use Symfony\Component\HttpFoundation\Request;

class JsonRequest extends HttpRequest {

  /**
   * @return mixed
   */
  public function send() {
    $kernel = \Drupal::getContainer()->get('http_kernel');
    $request = Request::create($this->url, $this->method, $this->parameters, $this->cookies, $this->files, $this->server, $this->content);
    $request->headers->set('Content-Type', 'application/json');
    return $kernel->handle($request);
  }

}
