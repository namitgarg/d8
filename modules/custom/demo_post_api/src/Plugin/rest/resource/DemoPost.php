<?php

namespace Drupal\demo_post_api\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "demo_post",
 *   label = @Translation("Demo Post"),
 *   uri_paths = {
 *     "canonical" = "/demo_post_api/demo_resource",
      "https://www.drupal.org/link-relations/create" = "/demo_post_api/demo_resource"

 *   }
 * )
 */
class DemoPost extends ResourceBase {
	 /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = ['message' => 'Hello, this is a get service'];
    return  new ResourceResponse($response);
  }
   public function post() {
    $response = ['message' => 'Hello, this is a post service'];
    return  new ResourceResponse($response);
  }

}
