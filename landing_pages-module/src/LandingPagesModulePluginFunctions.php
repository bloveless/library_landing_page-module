<?php namespace Fritzandandre\LandingPagesModule;

use Anomaly\Streams\Platform\Support\Hydrator;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Fritzandandre\LandingPagesModule\LandingPageResponse\Form\LandingPageResponseFormBuilder;
use Illuminate\Container\Container;

/**
 * Class LandingPagesModulePluginFunctions
 *
 * @link          http://www.fritzandandre.com
 * @author        Brennon Loveless <brennon@fritzandandre.com>
 * @package       Fritzandandre\LandingPagesModule
 */
class LandingPagesModulePluginFunctions
{

    /**
     * The hydrator utility.
     *
     * @var Hydrator
     */
    protected $hydrator;

    /**
     * The service container.
     *
     * @var Container
     */
    protected $container;

    /**
     * Create a new LandingPagesPluginFunctions instance.
     *
     * @param Hydrator  $hydrator
     * @param Container $container
     */
    function __construct(Hydrator $hydrator, Container $container)
    {
        $this->hydrator  = $hydrator;
        $this->container = $container;
    }

    /**
     * Return a stream entry form.
     *
     * @param array $parameters
     * @return $this
     */
    public function form(array $parameters = [])
    {
        $builder = LandingPageResponseFormBuilder::class;

        /* @var FormBuilder $builder */
        $builder = $this->container->make($builder);

        $this->hydrator->hydrate($builder, $parameters);

        $builder->make();

        return $builder->getFormPresenter();
    }
}
