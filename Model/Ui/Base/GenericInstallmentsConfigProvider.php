<?php
/**
 * Class GenericInstallmentConfigProvider
 *
 * @author      MundiPagg Embeddables Team <embeddables@mundipagg.com>
 * @copyright   2017 MundiPagg (http://www.mundipagg.com)
 * @license     http://www.mundipagg.com Copyright
 *
 * @link        http://www.mundipagg.com
 */

namespace MundiPagg\MundiPagg\Model\Ui\Base;


use MundiPagg\MundiPagg\Model\Installments\Config\ConfigInterface;
use Magento\Checkout\Model\ConfigProviderInterface;

abstract class GenericInstallmentsConfigProvider implements ConfigProviderInterface
{
    const CODE = null;

    protected $installments = [];
    protected $installmentsBuilder;
    protected $installmentsConfig;
    protected $config;
    protected $_assetRepo;

    public function __construct(
        \Magento\Framework\View\Asset\Repository $assetRepo,
        ConfigInterface $config
    )
    {
        $this->_assetRepo = $assetRepo;
        $this->setConfig($config);
    }

    public function getConfig()
    {
        $config = [
            'payment' => [
                'ccform' => [
                    'installments' => [
                        'active' => [$this::CODE => $this->_getConfig()->isActive()],
                        'value' => 0,
                    ],
                    'icons' => [
                        'Visa' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Visa.png")
                        ],
                        'Elo' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Elo.png")
                        ],
                        'Discover' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Discover.png")
                        ],
                        'Diners' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Diners.png")
                        ],
                        'Credz' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Credz.png")
                        ],
                        'Hipercard' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Hipercard.png")
                        ],
                        'Mastercard' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Mastercard.png")
                        ],
                        'SodexoAlimentacao' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/SodexoAlimentacao.png")
                        ],
                        'SodexoCombustivel' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/SodexoCombustivel.png")
                        ],
                        'SodexoCultura' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/SodexoCultura.png")
                        ],
                        'SodexoGift' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/SodexoGift.png")
                        ],
                        'SodexoPremium' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/SodexoPremium.png")
                        ],
                        'SodexoRefeicao' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/SodexoRefeicao.png")
                        ],
                        'Cabal' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Cabal.png")
                        ],
                        'Aura' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Aura.png")
                        ],
                        'Amex' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Amex.png")
                        ],
                        'Alelo' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Alelo.png")
                        ],
                        'VR' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/VR.png")
                        ],
                        'Banese' => [
                            'height' => 30,
                            'width' => 46,
                            'url' => $this->_assetRepo->getUrl("MundiPagg_MundiPagg::images/cc/Banese.png")
                        ],
                    ],
                ]
            ]
        ];
        return $config;
    }


    /**
     * @param ConfigInterface $config
     * @return $this
     */
    protected function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return ConfigInterface
     */
    protected function _getConfig()
    {
        return $this->config;
    }
}
