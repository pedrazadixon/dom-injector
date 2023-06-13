<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Routing\Router;

class ElementsController extends AppController
{
    public function index()
    {
        $elements = $this->paginate($this->Elements);

        $this->set(compact('elements'));
    }

    public function view($id = null)
    {
        $element = $this->Elements->get($id, [
            'contain' => [],
        ]);

        $this->set('element', $element);
    }

    public function add()
    {
        $element = $this->Elements->newEntity();
        if ($this->request->is('post')) {
            $element = $this->Elements->patchEntity($element, $this->request->getData());

            $element->uuid = Text::uuid();

            // dd($element);

            if ($this->Elements->save($element)) {
                $this->Flash->success(__('The element has been saved.'));

                return $this->redirect(['action' => 'update', $element->id]);
            }
            $this->Flash->error(__('The element could not be saved. Please, try again.'));
        }
        $this->set(compact('element'));
    }

    public function deploy($id)
    {

        $element = $this->Elements->get($id);

        $js_url = Router::url(['controller' => 'Elements', 'action' => 'run', $element->uuid], true) . '.js';

        $script = <<<SCRIPT
		<script>
		  (function () {
		    let script = document.createElement('script');
		    let id = (Math.random() + 1).toString(36).substring(7);
		    script.src = '{$js_url}?v=' + id;
		    document.body.appendChild(script);
		  })();
		</script>
		SCRIPT;

        $this->set(['script' => htmlentities($script)]);
    }

    public function run($uuid)
    {
        $uuid = str_replace('.js', '', $uuid);
        $element = $this->Elements->find()->where(['uuid' => $uuid])->first();

        $js_url = Router::url(['controller' => 'Elements', 'action' => 'js', $element->uuid], true) . '.js';
        $css_url = Router::url(['controller' => 'Elements', 'action' => 'css', $element->uuid], true) . '.css';

        // <link rel="stylesheet" href="style.css">

        $html = str_replace('`', '\`', $element->html);

        $script = <<<SCRIPT
        (function() {
            let id = (Math.random() + 1).toString(36).substring(7);

            let link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = '{$css_url}?v=' + id;
            document.head.appendChild(link);

            document.body.insertAdjacentHTML( 'beforeend', `{$html}` );

            let script = document.createElement('script');
            script.src = '{$js_url}?v=' + id;
            document.body.appendChild(script);

        })();
        SCRIPT;

        $response = $this->response->withType('application/javascript');
        return $response->withStringBody($script);
    }

    public function js($uuid)
    {
        $uuid = str_replace('.js', '', $uuid);
        $element = $this->Elements->find()->where(['uuid' => $uuid])->first();
        $response = $this->response->withType('application/javascript');
        return $response->withStringBody($element->js);
    }

    public function css($uuid)
    {
        $uuid = str_replace('.css', '', $uuid);
        $element = $this->Elements->find()->where(['uuid' => $uuid])->first();
        $response = $this->response->withType('text/css');
        return $response->withStringBody($element->css);
    }

    public function update($id = null)
    {
        $element = $this->Elements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $element = $this->Elements->patchEntity($element, $this->request->getData());
            if ($this->Elements->save($element)) {
                $this->Flash->success(__('The element has been saved.'));
                // return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The element could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('element'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $element = $this->Elements->get($id);
        if ($this->Elements->delete($element)) {
            $this->Flash->success(__('The element has been deleted.'));
        } else {
            $this->Flash->error(__('The element could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
