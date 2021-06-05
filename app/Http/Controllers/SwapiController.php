<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

abstract class SwapiController extends Controller
{
    protected $url;
    protected $type;

    /**
     * List all the entries of a given category.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function list(Request $request) {
        $page = $request->query('page', '');

        if ($page != '') {
            $this->url .= '?page=' . $page;
        }

        try {
            $result = $this->fetchUrl($this->url);
            $pagination = $this->getPaginationLinks($result);
            return view($this->view, [
                'view' => $this->view,
                'data' => $result,
                'term' => '',
                'next' => $pagination['next'],
                'previous' => $pagination['previous']
            ]);
        } catch(Exception $e) {
            render($e);
        }
    }

    /**
     * List an entry of a given category with a specified ID.
     *
     * @param int $id
     * @return View
     */
    public function listById($id) {
        
        try {
            $result = $this->fetchUrl($this->url . '/' . $id);
            
            return view($this->view, [
                'view' => $this->view,
                'data' => array('results' => array($result)),
                'term' => '',
                'next' => '',
                'previous' => ''
            ]);
        } catch(Exception $e) {
            render($e);
        }
    }

    /**
     * List all the entries of a given category with a specified term.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $term
     * @return View
     */
    public function listByTerm(Request $request, $term) {
        $page = $request->query('page', '');
        $queryPage = ($page != '') ? '&page=' . $page : '';
        $url = $this->url . '/?search=' . str_replace(' ', '%20', $term) . $queryPage;

        try {
            $result = $this->fetchUrl($url);
            $pagination = $this->getPaginationLinks($result);
            return view($this->view, [
                'view' => $this->view,
                'data' => $result,
                'term' => '/' . $term,
                'next' => $pagination['next'],
                'previous' => $pagination['previous']
            ]);
        } catch(Exception $e) {
            render($e);
        }
    }

    /**
     * Calls the API with the given URL, gets and decodes the response.
     *
     * @param  string  $url
     * @return array
     */
    private function fetchUrl($url) {
        try {
            $contents = file_get_contents($url);
            return json_decode($contents, true);
        } catch(Exception $e) {
            throw $e;
        }
    }

    /**
     * Gets the pagination links for a given set of results.
     *
     * @param  array  $result
     * @return array
     */
    private function getPaginationLinks($result) {
        return array(
            'next' => isset($result['next']) ? Str::after($result['next'], 'page=') : '',
            'previous' => isset($result['previous']) ? Str::after($result['previous'], 'page=') : ''
        );
    }
}
