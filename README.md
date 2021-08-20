# Livewire-L5-Repo-Request-Criteria

#Usage

- `use` the  `WithRequestCriteria` in your Livewire component.

```
    <?php
       
       namespace App\Http\Livewire;
       
       use Livewire\Component;
       use Livewire\WithPagination;
       use Prettus\Repository\Criteria\RequestCriteria;
       
       class LivewireComponentWithRequestCriteria extends Component
       {
           use WithRequestCriteria;
       
           public function render()
           {
               ...
           }
       
       }
```

- Call `$this->getRequestCriteria()` to get an instance of the L5-Repository's `RequestCriteria`
```
    <?php
       
       namespace App\Http\Livewire;
       
       use Livewire\Component;
       use Livewire\WithPagination;
       use Prettus\Repository\Criteria\RequestCriteria;
       
       class LivewireComponentWithRequestCriteria extends Component
       {
           use WithRequestCriteria;
       
           public function render()
           {
               $requestCriteria = $this->getRequestCriteria();
           }
       
       }
```

- Pass the requestCriteria to `pushCriteria`
```
    <?php
       
       namespace App\Http\Livewire;
       
       use Livewire\Component;
       use Livewire\WithPagination;
       use Prettus\Repository\Criteria\RequestCriteria;
       
       class LivewireComponentWithRequestCriteria extends Component
       {
           use WithRequestCriteria;
       
           public function render()
           {
               $requestCriteria = $this->getRequestCriteria();
               $repository->pushCriteria($requestCriteria);
           }
       
       }
```