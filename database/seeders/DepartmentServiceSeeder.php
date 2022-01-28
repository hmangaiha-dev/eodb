<?php

namespace Database\Seeders;

use App\Models\DepartmentService;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class DepartmentServiceSeeder extends Seeder
{
    // use Faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // $faker = Fa

    public function run()
    {
        $faker = Faker::create();

        $services = [
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Allotment of Industrial Plot",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => 'allotment-of-industrial-plot',
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Claiming Interest Subsidy",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => 'claiming-central-interest-subsidy-scheme',
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application form for Claiming Central Capital Investment Subsidy Scheme",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "claiming-central-capital-investment-subsidy-scheme",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Claim Of Subsidy On Rent Of Factory Shed",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Claiming Power Subsidy",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "claiming-power-subsidy",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Subsidy On Power Generating Set",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "subsidy-power-generating",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Subsidy On Power Line",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Subsidy On Cost Of Project Report",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "subsidy-cost-project-report",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Claim Of Interest Subsidy",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application For State Transportation Subsidy on Plant & Machineries",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 1,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Grant Of Land Subsidy",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],

            //AMC

            [
                'department_id' => 2,
                'category_id' => rand(1, 5),
                'service_name' => "Approval - Inspection - Payments	",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 2,
                'category_id' => rand(1, 5),
                'service_name' => "Licensing",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],

            //Environment Forest & Climate Change

            [
                'department_id' => 3,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Bamboo plantation in Non-forest Area",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "bamboo-plantions",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 3,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Permission to fell tress/ tree plantation in in non-forest area",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "permission-to-fell-trees",
                'sample_form' => $faker->sentence
            ],


            //Excise and Narcotics

            [
                'department_id' => 4,
                'category_id' => rand(1, 5),
                'service_name' => "to be filled",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 4,
                'category_id' => rand(1, 5),
                'service_name' => "to be filled",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],

            //Fire

            [
                'department_id' => 5,
                'category_id' => rand(1, 5),
                'service_name' =>  "Fire NOC",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "noc-form",
                'sample_form' => $faker->sentence
            ],

            //Food & Drug
            [
                'department_id' => 6,
                'category_id' => rand(1, 5),
                'service_name' =>   "Application for General (Retail) Licence Form 19",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "form19",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 6,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Restricted (Retail) Licence Form 19A",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "form19-A",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 6,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Wholesale Licence Form 19",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "form19_wholesale",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 6,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Licence to sell drugs by wholesale or distribute from motor vehicle Form 19AA",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "form19-AA",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 6,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Homoeopathic Retail Licence Form 19B",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "form19-B",
                'sample_form' => $faker->sentence
            ],

            //Labour Skill Development

            [
                'department_id' => 7,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Certificate of Registration under Shops & Establishment",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "certificate-of-registration-of-establishments",
                'sample_form' => $faker->sentence
            ],


            [
                'department_id' => 7,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for registration of license for the year and notice of occupation specified in section 6&7 of the Factories Act, 1948",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-and-grant-or-renewal-of-license-and-notice-of-occupation",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 7,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Registration of Establishment Employing Contract Labour (Contract labour Act Principal Employer Registration)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-of-establishment-employing-contract-labour",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 7,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Licence for Engaging Contract Labour under The Mizoram Contract Labour (R & A) Rules 2004",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "contract-labour-licence",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 7,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Registration of establishment Employing Migrant Workmen (Interstate Migrant Workers Principal Employer Registration)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-of-establishment-employing-migrant-workmen",
                'sample_form' => $faker->sentence
            ],


            [
                'department_id' => 7,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for permission to Construct, Extend or take into use any building as a factory under Factories Act, 1948",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "permission-to-construct-extend-take-any-building-factory",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 7,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Renewal of Licence for engaging Contract Labour under The Mizoram Contract Labour (R & A) Rules 2004",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "renewal-of-contract-labour-licence",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 7,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application for Registration of establishments employing building workers under The Mizoram Building & Other Construction Workers (RE&CS) Rules 2015",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-of-establishments-employing-building-workers",
                'sample_form' => $faker->sentence
            ],

            //Land Revenue

            [
                'department_id' => 8,
                'category_id' => rand(1, 5),
                'service_name' =>  "APPLICATION FOR PERIODIC PATTA (PERIODIC PATTA DILNA)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "periodic-patta",
                'sample_form' => $faker->sentence
            ],


            [
                'department_id' => 8,
                'category_id' => rand(1, 5),
                'service_name' =>  "APPLICATION FOR ALLOTMENT OF LAND FOR HOUSE SITE",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "allotment-of-house-land",
                'sample_form' => $faker->sentence
            ],


            [
                'department_id' => 8,
                'category_id' => rand(1, 5),
                'service_name' =>  "APPLICATION FOR ALLOTMENT OF LAND FOR SHOP/STALL",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "allotment-of-land-shop",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 8,
                'category_id' => rand(1, 5),
                'service_name' =>  "APPLICATION FOR RESIDENTIAL LAND SETTLEMENT CERTIFICATE INHMUN/LAND SETTLEMENT CERTIFICATE TURA DILNA",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "land-settlement",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 8,
                'category_id' => rand(1, 5),
                'service_name' => "Diversion Of Land Use/Change Of Land",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "land-diversion",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 8,
                'category_id' => rand(1, 5),
                'service_name' =>  "APPLICATION FOR TRANSFER OF OWNERSHIP OF LAND HOLDING",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "transfer-of-land-ownership",
                'sample_form' => $faker->sentence
            ],


            [
                'department_id' => 8,
                'category_id' => rand(1, 5),
                'service_name' =>  "APPLICATION FOR PARTITION OF LSC",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "partition-of-lsc",
                'sample_form' => $faker->sentence
            ],

            [
                'department_id' => 8,
                'category_id' => rand(1, 5),
                'service_name' => "Application For The Allotment Of Land To The Government Department/Corporation/Boards etc. On Land Lease/Limited Lease	",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "allotment-of-land-to-the-government",
                'sample_form' => $faker->sentence
            ],


            //Law & Judicial
            [
                'department_id' => 9,
                'category_id' => rand(1, 5),
                'service_name' => "No data",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],

            //Legal Metrology

            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Licensing of Manufacturer of Weights & Measures",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "licensing-of-manufacturer-of-weights&measures-1",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Renewal of Manufacturer of Weights & Measures",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "licensing-of-manufacturer-of-weights&measures-2",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Renewal of Dealer in Weight & Measures ",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "licensing-of-repairer-of-weights&measures-3",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Licence of Repairer of Weights & Measures",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "licensing-of-repairer-of-weights&measures-4",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Licence of Dealers in Weights & Measures	",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "licensing-of-dealers-in-weights&measures-5",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Registration of Manufacturer/Packer",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "certificate_of_registration_manufacturer_packer_6",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Registration of Importer/Packer",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "certificate_of_registration_importer_packer_7",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Renewal of Licence of Repairer of Weights & Measures",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "renewal-of-licence-repair-weightandmeasures-8",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' => "Licence of Importers of Weights & Measures",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "licence-of-importers-wieghtsandmearures-9",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' =>  "Verification of Weights & Measures",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "verification-of-weightsandmeasures-10",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 10,
                'category_id' => rand(1, 5),
                'service_name' =>  "Re-verification of Weights & Measures",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "re-verification-of-weights&measures-11",
                'sample_form' => $faker->sentence
            ],

            //Pollution Control Board

            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application For Consent To Establishment Industries Etc.",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "consent-to-establishment-industries",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' =>  "Accident Reporting for Bio-Medical Wastes",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "accident-reporting-bio-medical-waste",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' =>  "Submission of Annual report for Bio-Medical Wastes.",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "submission-anual-report-bio-medical-wastes",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Accident Reporting for Hazardous Waste",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "accident-reporting-hazardous-waste",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Submission of Annual Report for Hazardous Waste.",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "submission-anual-report-hazardous-wastes",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Accident Report Due To Solid Waste",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "accident-reporting-solid-waste",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Authorisation Under Solid Waste Management Rules For Processing/Recycling/Treatment And Disposal Of Solid Waste",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "authorisation-under-solid-waste-management-rules-for-processing-recycling-treatment",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Format Of Annual Report To Be Submitted By The Operator Of Facility To The Local Body.",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "anual-report-to-be-submitted-by-operator-of-facility-localbody",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application for renewal of authorisation under Solid Waste Management",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Registration As Producers Or Brand Owners Under Plastic Waste Management",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-as-producer-brand-owners-under-plastic-waste-management",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Registration of Units Engaged in Processing or Recycling of Plastic Waste.",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-units-engaged-processing-recycling-plastic-waste",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application For Registration For Manufacturers Of Plastic Raw Materials",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-manufacturers-plastic-raw-material",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' =>  "Submission Of Annual Report By Operator Of Plastic Waste Processing Or Recycling Facility To The Local Body",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "submission-anualreportby-operatorofplasticwasteprocessing-or-recyclingfacility-to-localbody",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Submission For Annual Report On Plastic Waste Management To Be Submitted By The Local Body.",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "anual-report-plastic-waste-management-submitted-by-local-body",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application Form For Registration Of Batteries Dealers",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-batteries-dealers",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application For Registration Of Importer Of New Lead Acid Batteries / Primary Lead Under Batteries Management & Handling Waste",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "registration-importer-new-lead-acid-batteries",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' =>  "Application For Obtaining Authorization Under Construction & Demolition Waste",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "application-obtaining-authorization-under-construction-demolition-waste",
                'sample_form' => $faker->sentence
            ],

            // hmangaiha
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Form For Filing Returns By Auctioneer Of Used Batteries Under Batteries (Management & Handling) Waste.",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "filing-returns-by-auctioneer-used-batteries",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Authorization (Hazardous and Other Wastes)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "filing-returns-by-auctioneer-used-batteries",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Form For Filing Returns Of Sale Of New Batteries And Collection Of Old Batteries Under Batteries (Management & Handling) Rules",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "filing-returns-by-auctioneer-used-batteries",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Obtaining Authorisation For Generation Or Storage Or Treatment Or Disposal Of E-Waste By Manufacturer Or Refurbisher Under e-Waste(Management) Rules",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "application-authorization-hazardous-other-wastes",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Authorisation Of Facilities Possessing Environmentally Sound Management Practice For Dismantling Or Recycling Of E-Waste",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "authorization-facilities-processing-environmentally-sound-management-practice-recycling-ewaste",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Authorization (Bio Medical Waste).",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "authorization-bio-medical-waste",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Authorization (e-Waste Management)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "authorization-e-waste-management",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 11,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Approval & Notification of sites",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "application-for-approval-&-Notification-of-sites",
                'sample_form' => $faker->sentence
            ],

        


            //Power & Electricity

            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Application form - New Connection (Low Tension Service)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "new-connection",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Application Form - New Connection (High Tension / Extra High-Tension Service)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "new-connection-high-tension",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Application For Changing The Name of Registered Consumer",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "changing-registered-customer-name",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Transfer of Ownership to Legal Heir",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "transfer-of-owner",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Conversion of Services / Change of Consumer Category / Shifting of Connection",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "conversion-of-services",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Load Enhancement / Load Reduction",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "load-enhancement-reduction",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Procedure for Determination of Connected Load",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Meter Related Complaints / Request for Testing of Meter",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "meter-complaints-or-request-for-testing",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 12,
                'category_id' => rand(1, 5),
                'service_name' => "Request for Permanent Disconnection & Termination of Agreement",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "request-for-disconnection",
                'sample_form' => $faker->sentence
            ],

            //Public Health

            [
                'department_id' => 13,
                'category_id' => rand(1, 5),
                'service_name' => "Application for New Water Connection (Domestic)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "new-water-connection",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 13,
                'category_id' => rand(1, 5),
                'service_name' => "Application for New Water Connection (Commercial)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 13,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Transfer Of House Water Connection",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "transfer-of-house-water-connection",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 13,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Change of Ownership of Consumer",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "changing-of-name-ownership-of-consumer",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 13,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Re-Connection of Temporary Disconnected Water Connection",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "reconnection-of-temporary-disconnected-water-connection",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 13,
                'category_id' => rand(1, 5),
                'service_name' => "Application for Disconnection of Water Connection",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "disconnection-of-water-connection",
                'sample_form' => $faker->sentence
            ],

            //PWD

            [
                'department_id' => 14,
                'category_id' => rand(1, 5),
                'service_name' => "Issue of Road Cutting Permission on (Scheduled Roads Under PWD)",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "road-cutting",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 14,
                'category_id' => rand(1, 5),
                'service_name' => "Issue of No Objection Certificate for Right of Way(Along scheduled Roads under PWD & PWD Land) [(Excluding NH)]",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],

            //Taxation
            [
                'department_id' => 15,
                'category_id' => rand(1, 5),
                'service_name' => "GST Registration",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],
            [
                'department_id' => 15,
                'category_id' => rand(1, 5),
                'service_name' => "Registration of A Society",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],

            //Urban Development
            [
                'department_id' => 16,
                'category_id' => rand(1, 5),
                'service_name' => "Application for General (Retail) Licence Form 19",
                'who_should_apply' => $faker->sentence,
                'how_to_apply' => $faker->text,
                'document_to_submit' => $faker->word,
                'timeline' => $faker->sentence,
                'fees' => $faker->randomNumber(3),
                'path' => "link",
                'sample_form' => $faker->sentence
            ],


        ];

        DepartmentService::truncate();

        DepartmentService::query()->upsert($services, 'department_id');
    }
}
