<?php


namespace App\Models\Services;


use App\Http\Requests\ArticleRequest;
use App\Models\Entities\Article;
use Camohub\Paginator\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PaginatorService extends Paginator
{

	public function render()
	{
		$pageCount = (int) ceil($this->totalCount / $this->perPage);
		$lastPage = 1 + max(0, $pageCount - 1);

		if ($this->totalCount / $this->perPage < 2)
		{
			$steps = array($this->currentPage);
		}
		else
		{
			$arr = range(max(1, $this->currentPage - 4), min($lastPage, $this->currentPage + 4));
			$this->totalCount = 4;
			$quotient = ($pageCount - 1) / $this->totalCount;

			for ($i = 0; $i <= $this->totalCount; $i++)
			{
				$arr[] = round($quotient * $i) + 1;
			}
			sort($arr);
			$steps = array_values(array_unique($arr));
		}

		return view('camohubPaginator::base', [
			'steps' => $steps,
			'pageCount' => $pageCount,
			'currentPage' => $this->currentPage,
			'lastPage' => $lastPage,
			'routeName' => $this->routeName,
			'routeParams' => $this->routeParams,
			'pageParam' => $this->pageParam,
		]);
	}

}