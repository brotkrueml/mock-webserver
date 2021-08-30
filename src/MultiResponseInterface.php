<?php

namespace donatj\MockWebServer;

interface MultiResponseInterface extends ResponseInterface {

	/**
	 * @internal
	 */
	public function next() : bool;

}
