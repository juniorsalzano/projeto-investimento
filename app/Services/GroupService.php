<?php 

namespace App\Service;

use Illuminate\Database\QueryException;
use Exception;
use Prettus\Validator\Exceptions\ValidatorException;

use App\Repositories\GroupRepository;
use App\Validators\GroupValidators;
use Prettus\Validator\Contracts\ValidatorInterface;


class GroupService 
{
  private $repository;
  private $validator;
  
  
  public function __construct(GroupRepository $repository, GroupValidators $validator)
  {
    $this->repository = $repository;
    $this->validator  = $validator;
  }

  public function store(array $data)
  {
    try {

      $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
      $group = $this->repository->create($data);

      return [
        'success'  => true,
        'messages' => 'Instituição cadastrada',
        'data'     => $group,
      ];
    } catch (Exception $e) {

      switch (get_class($e)) {
        case QueryException::class     : return ['success' => false, 'messages' => $e->getMessage()];
        case ValidatorException::class : return ['success' => false, 'messages' => $e->getMessageBag()];
        case Exception::class          : return ['success' => false, 'messages' => $e->getMessage()];
        default                        : return ['success' => false, 'messages' => $e->getMessage()];
      }
    }
  }
}

?>