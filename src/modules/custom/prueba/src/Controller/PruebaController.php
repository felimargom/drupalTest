<?php

declare(strict_types=1);

namespace Drupal\prueba\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\ContextProvider\CurrentUserContext;
use Drupal\user\PermissionHandlerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for prueba routes.
 */
final class PruebaController extends ControllerBase {

  /**
   * The controller constructor.
   */
  public function __construct(
    private readonly CurrentUserContext $userCurrentUserContext,
    private readonly PermissionHandlerInterface $userPermissions,
  ) {}

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): self {
    return new self(
      $container->get('user.current_user_context'),
      $container->get('user.permissions'),
    );
  }

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
      '#theme' => 'nueva-plantilla',
    ];

    return $build;
  }

}
