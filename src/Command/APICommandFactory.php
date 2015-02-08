<?php

namespace LacunaPHP\APIClient\Command;

use LacunaPHP\APIClient\Command\APICommandFactoryInterface;

use LacunaPHP\APIClient\Command\Empire\EmpireCommandFactory;
use LacunaPHP\APIClient\Command\Alliance\AllianceCommandFactory;
use LacunaPHP\APIClient\Command\Inbox\InboxCommandFactory;
use LacunaPHP\APIClient\Command\Stats\StatsCommandFactory;
use LacunaPHP\APIClient\Command\Map\MapCommandFactory;
use LacunaPHP\APIClient\Command\Body\BodyCommandFactory;
use LacunaPHP\APIClient\Command\Captcha\CaptchaCommandFactory;

use LacunaPHP\APIClient\Command\Building\Algae\AlgaeCommandFactory;
use LacunaPHP\APIClient\Command\Building\AlgaePond\AlgaePondCommandFactory;
use LacunaPHP\APIClient\Command\Building\AmalgusMeadow\AmalgusMeadowCommandFactory;
use LacunaPHP\APIClient\Command\Building\Apple\AppleCommandFactory;
use LacunaPHP\APIClient\Command\Building\Archaeology\ArchaeologyCommandFactory;
use LacunaPHP\APIClient\Command\Building\AtmosphericEvaporator\AtmosphericEvaporatorCommandFactory;
use LacunaPHP\APIClient\Command\Building\Beach\BeachCommandFactory;
use LacunaPHP\APIClient\Command\Building\Bean\BeanCommandFactory;
use LacunaPHP\APIClient\Command\Building\Beeldeban\BeeldebanCommandFactory;
use LacunaPHP\APIClient\Command\Building\BeeldebanNest\BeeldebanNestCommandFactory;
use LacunaPHP\APIClient\Command\Building\BlackHoleGenerator\BlackHoleGeneratorCommandFactory;
use LacunaPHP\APIClient\Command\Building\Bread\BreadCommandFactory;
use LacunaPHP\APIClient\Command\Building\Burger\BurgerCommandFactory;
use LacunaPHP\APIClient\Command\Building\Capitol\CapitolCommandFactory;
use LacunaPHP\APIClient\Command\Building\Cheese\CheeseCommandFactory;
use LacunaPHP\APIClient\Command\Building\Chip\ChipCommandFactory;
use LacunaPHP\APIClient\Command\Building\Cider\CiderCommandFactory;
use LacunaPHP\APIClient\Command\Building\CitadelOfKnope\CitadelOfKnopeCommandFactory;
use LacunaPHP\APIClient\Command\Building\CloakingLab\CloakingLabCommandFactory;
use LacunaPHP\APIClient\Command\Building\Corn\CornCommandFactory;
use LacunaPHP\APIClient\Command\Building\CornMeal\CornMealCommandFactory;
use LacunaPHP\APIClient\Command\Building\CrashedShipSite\CrashedShipSiteCommandFactory;
use LacunaPHP\APIClient\Command\Building\Crater\CraterCommandFactory;
use LacunaPHP\APIClient\Command\Building\Dairy\DairyCommandFactory;
use LacunaPHP\APIClient\Command\Building\Denton\DentonCommandFactory;
use LacunaPHP\APIClient\Command\Building\DentonBrambles\DentonBramblesCommandFactory;
use LacunaPHP\APIClient\Command\Building\DeployedBleeder\DeployedBleederCommandFactory;
use LacunaPHP\APIClient\Command\Building\Development\DevelopmentCommandFactory;
use LacunaPHP\APIClient\Command\Building\DistributionCenter\DistributionCenterCommandFactory;
use LacunaPHP\APIClient\Command\Building\Embassy\EmbassyCommandFactory;
use LacunaPHP\APIClient\Command\Building\EnergyReserve\EnergyReserveCommandFactory;
use LacunaPHP\APIClient\Command\Building\Entertainment\EntertainmentCommandFactory;
use LacunaPHP\APIClient\Command\Building\Espionage\EspionageCommandFactory;
use LacunaPHP\APIClient\Command\Building\EssentiaVein\EssentiaVeinCommandFactory;
use LacunaPHP\APIClient\Command\Building\Fission\FissionCommandFactory;
use LacunaPHP\APIClient\Command\Building\Fissure\FissureCommandFactory;
use LacunaPHP\APIClient\Command\Building\FoodReserve\FoodReserveCommandFactory;
use LacunaPHP\APIClient\Command\Building\Fusion\FusionCommandFactory;
use LacunaPHP\APIClient\Command\Building\GasGiantLab\GasGiantLabCommandFactory;
use LacunaPHP\APIClient\Command\Building\GasGiantPlatform\GasGiantPlatformCommandFactory;
use LacunaPHP\APIClient\Command\Building\GeneticsLab\GeneticsLabCommandFactory;
use LacunaPHP\APIClient\Command\Building\Geo\GeoCommandFactory;
use LacunaPHP\APIClient\Command\Building\GeoThermalVent\GeoThermalVentCommandFactory;
use LacunaPHP\APIClient\Command\Building\GratchsGauntlet\GratchsGauntletCommandFactory;
use LacunaPHP\APIClient\Command\Building\GreatBallOfJunk\GreatBallOfJunkCommandFactory;
use LacunaPHP\APIClient\Command\Building\Grove\GroveCommandFactory;
use LacunaPHP\APIClient\Command\Building\HallsOfVrbansk\HallsOfVrbanskCommandFactory;
use LacunaPHP\APIClient\Command\Building\Hydrocarbon\HydrocarbonCommandFactory;
use LacunaPHP\APIClient\Command\Building\Intelligence\IntelligenceCommandFactory;
use LacunaPHP\APIClient\Command\Building\IntelTraining\IntelTrainingCommandFactory;
use LacunaPHP\APIClient\Command\Building\InterDimensionalRift\InterDimensionalRiftCommandFactory;
use LacunaPHP\APIClient\Command\Building\JunkHengeSculpture\JunkHengeSculptureCommandFactory;
use LacunaPHP\APIClient\Command\Building\KalavianRuins\KalavianRuinsCommandFactory;
use LacunaPHP\APIClient\Command\Building\KasternsKeep\KasternsKeepCommandFactory;
use LacunaPHP\APIClient\Command\Building\Lake\LakeCommandFactory;
use LacunaPHP\APIClient\Command\Building\Lagoon\LagoonCommandFactory;
use LacunaPHP\APIClient\Command\Building\Lapis\LapisCommandFactory;
use LacunaPHP\APIClient\Command\Building\LapisForest\LapisForestCommandFactory;
use LacunaPHP\APIClient\Command\Building\LibraryOfJith\LibraryOfJithCommandFactory;
use LacunaPHP\APIClient\Command\Building\LostCityOfTyleon\LostCityOfTyleonCommandFactory;
use LacunaPHP\APIClient\Command\Building\LuxuryHousing\LuxuryHousingCommandFactory;
use LacunaPHP\APIClient\Command\Building\Malcud\MalcudCommandFactory;
use LacunaPHP\APIClient\Command\Building\MalcudField\MalcudFieldCommandFactory;
use LacunaPHP\APIClient\Command\Building\MassadsHenge\MassadsHengeCommandFactory;
use LacunaPHP\APIClient\Command\Building\MayhemTraining\MayhemTrainingCommandFactory;
use LacunaPHP\APIClient\Command\Building\MercenariesGuild\MercenariesGuildCommandFactory;
use LacunaPHP\APIClient\Command\Building\MetalJunkArches\MetalJunkArchesCommandFactory;
use LacunaPHP\APIClient\Command\Building\Mine\MineCommandFactory;
use LacunaPHP\APIClient\Command\Building\MiningMinistry\MiningMinistryCommandFactory;
use LacunaPHP\APIClient\Command\Building\MissionCommand\MissionCommandCommandFactory;
use LacunaPHP\APIClient\Command\Building\MunitionsLab\MunitionsLabCommandFactory;
use LacunaPHP\APIClient\Command\Building\NaturalSpring\NaturalSpringCommandFactory;
use LacunaPHP\APIClient\Command\Building\Network19\Network19CommandFactory;
use LacunaPHP\APIClient\Command\Building\Observatory\ObservatoryCommandFactory;
use LacunaPHP\APIClient\Command\Building\OracleOfAnid\OracleOfAnidCommandFactory;
use LacunaPHP\APIClient\Command\Building\OreRefinery\OreRefineryCommandFactory;
use LacunaPHP\APIClient\Command\Building\OreStorage\OreStorageCommandFactory;
use LacunaPHP\APIClient\Command\Building\Oversight\OversightCommandFactory;
use LacunaPHP\APIClient\Command\Building\Pancake\PancakeCommandFactory;
use LacunaPHP\APIClient\Command\Building\PantheonOfHagness\PantheonOfHagnessCommandFactory;
use LacunaPHP\APIClient\Command\Building\Park\ParkCommandFactory;
use LacunaPHP\APIClient\Command\Building\Pie\PieCommandFactory;
use LacunaPHP\APIClient\Command\Building\PilotTraining\PilotTrainingCommandFactory;
use LacunaPHP\APIClient\Command\Building\PlanetaryCommand\PlanetaryCommandCommandFactory;
use LacunaPHP\APIClient\Command\Building\PoliticsTraining\PoliticsTrainingCommandFactory;
use LacunaPHP\APIClient\Command\Building\Potato\PotatoCommandFactory;
use LacunaPHP\APIClient\Command\Building\Propulsion\PropulsionCommandFactory;
use LacunaPHP\APIClient\Command\Building\PyramidJunkSculpture\PyramidJunkSculptureCommandFactory;
use LacunaPHP\APIClient\Command\Building\Ravine\RavineCommandFactory;
use LacunaPHP\APIClient\Command\Building\RockyOutcrop\RockyOutcropCommandFactory;
use LacunaPHP\APIClient\Command\Building\Sand\SandCommandFactory;
use LacunaPHP\APIClient\Command\Building\SAW\SAWCommandFactory;
use LacunaPHP\APIClient\Command\Building\Security\SecurityCommandFactory;
use LacunaPHP\APIClient\Command\Building\Shake\ShakeCommandFactory;
use LacunaPHP\APIClient\Command\Building\Shipyard\ShipyardCommandFactory;
use LacunaPHP\APIClient\Command\Building\Singularity\SingularityCommandFactory;
use LacunaPHP\APIClient\Command\Building\Soup\SoupCommandFactory;
use LacunaPHP\APIClient\Command\Building\SpaceJunkPark\SpaceJunkParkCommandFactory;
use LacunaPHP\APIClient\Command\Building\SpacePort\SpacePortCommandFactory;
use LacunaPHP\APIClient\Command\Building\SpaceStationLab\SpaceStationLabCommandFactory;
use LacunaPHP\APIClient\Command\Building\Stockpile\StockpileCommandFactory;
use LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\SubspaceSupplyDepotCommandFactory;
use LacunaPHP\APIClient\Command\Building\SupplyPod\SupplyPodCommandFactory;
use LacunaPHP\APIClient\Command\Building\Syrup\SyrupCommandFactory;
use LacunaPHP\APIClient\Command\Building\TempleOfTheDrajilites\TempleOfTheDrajilitesCommandFactory;
use LacunaPHP\APIClient\Command\Building\TerraformingLab\TerraformingLabCommandFactory;
use LacunaPHP\APIClient\Command\Building\TerraformingPlatform\TerraformingPlatformCommandFactory;
use LacunaPHP\APIClient\Command\Building\TheDillonForge\TheDillonForgeCommandFactory;
use LacunaPHP\APIClient\Command\Building\TheftTraining\TheftTrainingCommandFactory;
use LacunaPHP\APIClient\Command\Building\ThemePark\ThemeParkCommandFactory;
use LacunaPHP\APIClient\Command\Building\Trade\TradeCommandFactory;
use LacunaPHP\APIClient\Command\Building\Transporter\TransporterCommandFactory;
use LacunaPHP\APIClient\Command\Building\University\UniversityCommandFactory;
use LacunaPHP\APIClient\Command\Building\Volcano\VolcanoCommandFactory;
use LacunaPHP\APIClient\Command\Building\WasteDigester\WasteDigesterCommandFactory;
use LacunaPHP\APIClient\Command\Building\WasteEnergy\WasteEnergyCommandFactory;
use LacunaPHP\APIClient\Command\Building\WasteExchanger\WasteExchangerCommandFactory;
use LacunaPHP\APIClient\Command\Building\WasteRecycling\WasteRecyclingCommandFactory;
use LacunaPHP\APIClient\Command\Building\WasteSequestration\WasteSequestrationCommandFactory;
use LacunaPHP\APIClient\Command\Building\WasteTreatment\WasteTreatmentCommandFactory;
use LacunaPHP\APIClient\Command\Building\WaterProduction\WaterProductionCommandFactory;
use LacunaPHP\APIClient\Command\Building\WaterPurification\WaterPurificationCommandFactory;
use LacunaPHP\APIClient\Command\Building\WaterReclamation\WaterReclamationCommandFactory;
use LacunaPHP\APIClient\Command\Building\WaterStorage\WaterStorageCommandFactory;
use LacunaPHP\APIClient\Command\Building\Wheat\WheatCommandFactory;

use LacunaPHP\APIClient\Command\Building\ArtMuseum\ArtMuseumCommandFactory;
use LacunaPHP\APIClient\Command\Building\CulinaryInstitute\CulinaryInstituteCommandFactory;
use LacunaPHP\APIClient\Command\Building\IBS\IBSCommandFactory;
use LacunaPHP\APIClient\Command\Building\OperaHouse\OperaHouseCommandFactory;
use LacunaPHP\APIClient\Command\Building\Parliament\ParliamentCommandFactory;
use LacunaPHP\APIClient\Command\Building\PoliceStation\PoliceStationCommandFactory;
use LacunaPHP\APIClient\Command\Building\StationCommand\StationCommandCommandFactory;
use LacunaPHP\APIClient\Command\Building\Warehouse\WarehouseCommandFactory;


class APICommandFactory implements APICommandFactoryInterface {
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public static function create($factory) {
		$name = strtolower(trim($factory));
		switch($name) {
			case 'empire': return new EmpireCommandFactory($name);
			case 'alliance': return new AllianceCommandFactory($name);
			case 'inbox': return new InboxCommandFactory($name);
			case 'stats': return new StatsCommandFactory($name);
			case 'map': return new MapCommandFactory($name);
			case 'body': return new BodyCommandFactory($name);
			case 'captcha': return new CaptchaCommandFactory($name);

			// buildings
			case 'algae': return new AlgaeCommandFactory($name);
			case 'algaepond': return new AlgaePondCommandFactory($name);
			case 'amalgusmeadow': return new AmalgusMeadowCommandFactory($name);
			case 'apple': return new AppleCommandFactory($name);
			case 'archaeology': return new ArchaeologyCommandFactory($name);
			case 'atmosphericevaporator': return new AtmosphericEvaporatorCommandFactory($name);
			case 'beach': return new BeachCommandFactory($name);
			case 'bean': return new BeanCommandFactory($name);
			case 'beeldeban': return new BeeldebanCommandFactory($name);
			case 'beeldebannest': return new BeeldebanNestCommandFactory($name);
			case 'blackholegenerator': return new BlackHoleGeneratorCommandFactory($name);
			case 'bread': return new BreadCommandFactory($name);
			case 'burger': return new BurgerCommandFactory($name);
			case 'capitol': return new CapitolCommandFactory($name);
			case 'cheese': return new CheeseCommandFactory($name);
			case 'chip': return new ChipCommandFactory($name);
			case 'cider': return new CiderCommandFactory($name);
			case 'citadelofknope': return new CitadelOfKnopeCommandFactory($name);
			case 'cloakinglab': return new CloakingLabCommandFactory($name);
			case 'corn': return new CornCommandFactory($name);
			case 'cornmeal': return new CornMealCommandFactory($name);
			case 'crashedshipsite': return new CrashedShipSiteCommandFactory($name);
			case 'crater': return new CraterCommandFactory($name);
			case 'dairy': return new DairyCommandFactory($name);
			case 'denton': return new DentonCommandFactory($name);
			case 'dentonbrambles': return new DentonBramblesCommandFactory($name);
			case 'deployedbleeder': return new DeployedBleederCommandFactory($name);
			case 'development': return new DevelopmentCommandFactory($name);
			case 'distributioncenter': return new DistributionCenterCommandFactory($name);
			case 'embassy': return new EmbassyCommandFactory($name);
			case 'energyreserve': return new EnergyReserveCommandFactory($name);
			case 'entertainment': return new EntertainmentCommandFactory($name);
			case 'espionage': return new EspionageCommandFactory($name);
			case 'essentiavein': return new EssentiaVeinCommandFactory($name);
			case 'fission': return new FissionCommandFactory($name);
			case 'fissure': return new FissureCommandFactory($name);
			case 'foodreserve': return new FoodReserveCommandFactory($name);
			case 'fusion': return new FusionCommandFactory($name);
			case 'gasgiantlab': return new GasGiantLabCommandFactory($name);
			case 'gasgiantplatform': return new GasGiantPlatformCommandFactory($name);
			case 'geneticslab': return new GeneticsLabCommandFactory($name);
			case 'geo': return new GeoCommandFactory($name);
			case 'geothermalvent': return new GeoThermalVentCommandFactory($name);
			case 'gratchsgauntlet': return new GratchsGauntletCommandFactory($name);
			case 'greatballofjunk': return new GreatBallOfJunkCommandFactory($name);
			case 'grove': return new GroveCommandFactory($name);
			case 'hallsofvrbansk': return new HallsOfVrbanskCommandFactory($name);
			case 'hydrocarbon': return new HydrocarbonCommandFactory($name);
			case 'intelligence': return new IntelligenceCommandFactory($name);
			case 'inteltraining': return new IntelTrainingCommandFactory($name);
			case 'interdimensionalrift': return new InterDimensionalRiftCommandFactory($name);
			case 'junkhengesculpture': return new JunkHengeSculptureCommandFactory($name);
			case 'kalavianruins': return new KalavianRuinsCommandFactory($name);
			case 'kasternskeep': return new KasternsKeepCommandFactory($name);
			case 'lake': return new LakeCommandFactory($name);
			case 'lagoon': return new LagoonCommandFactory($name);
			case 'lapis': return new LapisCommandFactory($name);
			case 'lapisforest': return new LapisForestCommandFactory($name);
			case 'libraryofjith': return new LibraryOfJithCommandFactory($name);
			case 'lostcityoftyleon': return new LostCityOfTyleonCommandFactory($name);
			case 'luxuryhousing': return new LuxuryHousingCommandFactory($name);
			case 'malcud': return new MalcudCommandFactory($name);
			case 'malcudfield': return new MalcudFieldCommandFactory($name);
			case 'massadshenge': return new MassadsHengeCommandFactory($name);
			case 'mayhemtraining': return new MayhemTrainingCommandFactory($name);
			case 'mercenariesguild': return new MercenariesGuildCommandFactory($name);
			case 'metaljunkarches': return new MetalJunkArchesCommandFactory($name);
			case 'mine': return new MineCommandFactory($name);
			case 'miningministry': return new MiningMinistryCommandFactory($name);
			case 'missioncommand': return new MissionCommandCommandFactory($name);
			case 'munitionslab': return new MunitionsLabCommandFactory($name);
			case 'naturalspring': return new NaturalSpringCommandFactory($name);
			case 'network19': return new Network19CommandFactory($name);
			case 'observatory': return new ObservatoryCommandFactory($name);
			case 'oracleofanid': return new OracleOfAnidCommandFactory($name);
			case 'orerefinery': return new OreRefineryCommandFactory($name);
			case 'orestorage': return new OreStorageCommandFactory($name);
			case 'oversight': return new OversightCommandFactory($name);
			case 'pancake': return new PancakeCommandFactory($name);
			case 'pantheonofhagness': return new PantheonOfHagnessCommandFactory($name);
			case 'park': return new ParkCommandFactory($name);
			case 'pie': return new PieCommandFactory($name);
			case 'pilottraining': return new PilotTrainingCommandFactory($name);
			case 'planetarycommand': return new PlanetaryCommandCommandFactory($name);
			case 'politicstraining': return new PoliticsTrainingCommandFactory($name);
			case 'potato': return new PotatoCommandFactory($name);
			case 'propulsion': return new PropulsionCommandFactory($name);
			case 'pyramidjunksculpture': return new PyramidJunkSculptureCommandFactory($name);
			case 'ravine': return new RavineCommandFactory($name);
			case 'rockyoutcrop': return new RockyOutcropCommandFactory($name);
			case 'sand': return new SandCommandFactory($name);
			case 'saw': return new SAWCommandFactory($name);
			case 'security': return new SecurityCommandFactory($name);
			case 'shake': return new ShakeCommandFactory($name);
			case 'shipyard': return new ShipyardCommandFactory($name);
			case 'singularity': return new SingularityCommandFactory($name);
			case 'soup': return new SoupCommandFactory($name);
			case 'spacejunkpark': return new SpaceJunkParkCommandFactory($name);
			case 'spaceport': return new SpacePortCommandFactory($name);
			case 'spacestationlab': return new SpaceStationLabCommandFactory($name);
			case 'stockpile': return new StockpileCommandFactory($name);
			case 'subspacesupplydepot': return new SubspaceSupplyDepotCommandFactory($name);
			case 'supplypod': return new SupplyPodCommandFactory($name);
			case 'syrup': return new SyrupCommandFactory($name);
			case 'templeofthedrajilites': return new TempleOfTheDrajilitesCommandFactory($name);
			case 'terraforminglab': return new TerraformingLabCommandFactory($name);
			case 'terraformingplatform': return new TerraformingPlatformCommandFactory($name);
			case 'thedillonforge': return new TheDillonForgeCommandFactory($name);
			case 'thefttraining': return new TheftTrainingCommandFactory($name);
			case 'themepark': return new ThemeParkCommandFactory($name);
			case 'trade': return new TradeCommandFactory($name);
			case 'transporter': return new TransporterCommandFactory($name);
			case 'university': return new UniversityCommandFactory($name);
			case 'volcano': return new VolcanoCommandFactory($name);
			case 'wastedigester': return new WasteDigesterCommandFactory($name);
			case 'wasteenergy': return new WasteEnergyCommandFactory($name);
			case 'wasteexchanger': return new WasteExchangerCommandFactory($name);
			case 'wasterecycling': return new WasteRecyclingCommandFactory($name);
			case 'wastesequestration': return new WasteSequestrationCommandFactory($name);
			case 'wastetreatment': return new WasteTreatmentCommandFactory($name);
			case 'waterproduction': return new WaterProductionCommandFactory($name);
			case 'waterpurification': return new WaterPurificationCommandFactory($name);
			case 'waterreclamation': return new WaterReclamationCommandFactory($name);
			case 'waterstorage': return new WaterStorageCommandFactory($name);
			case 'wheat': return new WheatCommandFactory($name);

			// ss modules
			case 'artmuseum': return new ArtMuseumCommandFactory($name);
			case 'culinaryinstitute': return new CulinaryInstituteCommandFactory($name);
			case 'ibs': return new IBSCommandFactory($name);
			case 'operahouse': return new OperaHouseCommandFactory($name);
			case 'parliament': return new ParliamentCommandFactory($name);
			case 'policestation': return new PoliceStationCommandFactory($name);
			case 'stationcommand': return new StationCommandCommandFactory($name);
			case 'warehouse': return new WarehouseCommandFactory($name);
		}

		throw new \InvalidArgumentException('unknown factory ' . $factory);
	}


	public function getName() {
		return $this->name;
	}

	public function getCommand($name, array $args = [], array $options = []) {
		throw new \InvalidArgumentException('unknown command ' . $name);
	}
}