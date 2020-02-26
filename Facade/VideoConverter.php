<?php declare(strict_types=1);


namespace app\Facade;


class VideoConverter {
	private $result;

	public function save() {
		echo $this->result;
	}

	public function convert($filename, $format) {
		$file = new VideoFile($filename);
		$sourceCodec = CodecFactory::extract($file);
		$destinationCodec = null;
		if ($format === "mp4") {
			$destinationCodec = new MPEG4CompressionCodec();
		} else $destinationCodec = new OggCompressionCodec();

		$buffer = BitrateReader::read($filename, $sourceCodec);
		$result = BitrateReader::convert($buffer, $destinationCodec);
		$result = AudioMixer::fix($result);

		$this->result = $result;
	}
}