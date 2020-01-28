<?php

namespace Tutoriel1\html;
class BootstrapForm extends Form {


	public function input( $name ) {
		return $this -> surround (
			'<label>' . $name . '</label>
			<input type="text" class ="form-control" name= "' . $name . '" value = "' . $this -> getValue ( $name ) . '">' );
	}

	protected function surround( $html ) {
		return "<div class=\"form-group\">{$html}</div>";
	}

	public function submit() {

		return $this -> surround (
			'<button type = "submit" class = "btn btn-primary">Envoyer</button>' );
	}
}