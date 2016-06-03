<?php

/**
 * @file
 * Contains Drupal\flag\FlaggingService.
 */

namespace Drupal\flag;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\Query\QueryFactory;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Class FlaggingService.
 *
 * Resets a flag on request and automatically when a flag is deleted.
 *
 * This implementation while correct may not scale.
 * With large numbers of flaggings to delete it will cosume an amount of
 * time which is deemed unacceptable to site users.
 *
 * Faster implementations become possible once a queue system is developed to
 * hand off multiple delettions.
 *
 * @see https://www.drupal.org/node/89181
 */
class FlaggingService implements FlaggingServiceInterface {

  /**
   * The entity query manager.
   *
   * @var \Drupal\Core\Entity\Query\QueryFactory
   */
  private $entityQueryManager;

  /**
   * The event dispatcher.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  private $eventDispatcher;

  /*
   * @var EntityTypeManagerInterface
   * */
  private $entityTypeManager;

  /**
   * The Flag Service.
   *
   * @var \Drupal\flag\FlagService
   */
  private $flagService;

  /**
   * Constructor.
   *
   * @param QueryFactory $entity_query
   *   The entity query factory.
   * @param EventDispatcherInterface $event_dispatcher
   *   The event dispatcher service.
   */
  public function __construct(QueryFactory $entity_query,
                              EventDispatcherInterface $event_dispatcher,
                              FlagService $flag_service,
                              EntityTypeManagerInterface $entity_type_manager) {
    $this->entityQueryManager = $entity_query;
    $this->eventDispatcher = $event_dispatcher;
    $this->flagService = $flag_service;
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public function reset(FlagInterface $flag, EntityInterface $entity = NULL) {
    $flaggings = $this->flagService->getFlaggings($flag, $entity);
    $count = count($flaggings);

    $this->entityTypeManager->getStorage('flagging')->delete($flaggings);

    return $count;
  }

}
