<?php
declare(strict_types=1);

use App\Patterns\Creational\AbstractFactory\CsvWriter;
use App\Patterns\Creational\AbstractFactory\JsonWriter;
use App\Patterns\Creational\AbstractFactory\UnixWriterFactory;
use App\Patterns\Creational\AbstractFactory\WriterFactory;

class AbstractFactoryTest extends TestCase
{
    /**
     * @return array
     */
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
        ];
    }

    /**
     * @dataProvider provideFactory
     * @param WriterFactory $writerFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}
