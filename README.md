# Livewire-L5-Repo-Request-Criteria

# Usage

- `use` the  `WithRequestCriteria` trait in your Livewire component.

```php
    <?php
       
       namespace App\Http\Livewire;
       
       use Livewire\Component;
       use Livewire\WithPagination;
       use Saadj55\Traits\WithRequestCriteria;
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
```php
    <?php
       
       namespace App\Http\Livewire;
       
       use Livewire\Component;
       use Saadj55\Traits\WithRequestCriteria;
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
```php
    <?php
       
       namespace App\Http\Livewire;
       
       use Livewire\Component;
       use Saadj55\Traits\WithRequestCriteria;
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
