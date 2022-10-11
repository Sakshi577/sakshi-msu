<?php
 namespace Mgt\Varnish\Controller\Api; class PurgeTag extends \Magento\Framework\App\Action\Action { protected $cachePurger; protected $config; public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\CacheInvalidate\Model\PurgeCache $cachePurger, \Mgt\Varnish\Model\Cache\Config $config) { goto De540; De540: $this->cachePurger = $cachePurger; goto Bda8b; eee37: parent::__construct($context); goto E1570; Bda8b: $this->config = $config; goto eee37; E1570: } public function execute() { goto C117d; Daaa0: $body = json_encode($body); goto Da065; Fa770: if (!($secretKey && $tag)) { goto d0072; } goto c7245; Ed9c7: $secretKey = $request->getParam("\x73\145\143\x72\x65\x74\x4b\145\x79"); goto D3274; B9b47: exit; goto Afb5b; c7245: try { goto a4c0f; Ebad5: if (!($secretKey != $apiSecretKey)) { goto Ded49; } goto E8905; ca92d: $this->cachePurger->sendPurgeRequest($tags); goto de851; e393c: Ded49: goto Ca325; Ca325: $tags = [$tag]; goto ca92d; de851: $body = ["\163\x75\143\x63\145\x73\163" => 1, "\155\145\163\163\141\147\x65" => sprintf("\126\x61\x72\156\151\x73\150\x20\x43\x61\143\150\x65\x20\x70\x75\x72\x67\x65\144\x20\142\171\40\x66\157\x6c\x6c\x6f\167\x69\156\147\40\164\141\x67\x3a\x20\45\163", $tag)]; goto Bd24d; a4c0f: $apiSecretKey = $this->config->getApiSecretKey(); goto Ebad5; E8905: throw new \Exception("\x53\x65\x63\162\145\164\x20\x61\160\x69\40\153\145\x79\40\151\163\40\156\x6f\x74\40\143\157\162\x72\145\x63\164"); goto e393c; Bd24d: } catch (\Exception $e) { $errorMessage = $e->getMessage(); $body = ["\163\165\143\143\x65\163\163" => 0, "\155\x65\x73\163\x61\147\145" => $errorMessage]; } goto B87a6; E3c8e: $body = []; goto Ed9c7; cc7f6: $response->sendResponse(); goto B9b47; Da065: $response->setHeader("\x43\x6f\x6e\x74\x65\x6e\164\55\x54\171\160\x65", "\141\160\160\154\151\143\x61\164\151\x6f\156\x2f\152\x73\x6f\x6e"); goto Db618; B87a6: d0072: goto Daaa0; Db618: $response->setBody($body); goto cc7f6; C117d: $request = $this->getRequest(); goto C90a4; C90a4: $response = $this->getResponse(); goto E3c8e; D3274: $tag = $request->getParam("\164\141\147"); goto Fa770; Afb5b: } }
