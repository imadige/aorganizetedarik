<?php


class Nonpassword
{

	public static function control($string)
	{
		$arr=self::getList();

		if(isset($arr[strtolower($string)]))
		{
			return false;
		}else
			return true;

	}

	private static function getList()
	{
		return array(

			"123456"=>"123456",
			"porsche"=>"porsche",
			"firebird"=>"firebird",
			"prince"=>"prince",
			"rosebud"=>"rosebud",
			"password"=>"password",
			"guitar"=>"guitar",
			"butter"=>"butter",
			"beach"=>"beach",
			"aaaaaa"=>"aaaaaa",
			"bbbbbb"=>"bbbbbb",
			"cccccc"=>"cccccc",
			"dddddd"=>"dddddd",
			"eeeeee"=>"eeeeee",
			"ffffff"=>"ffffff",
			"jaguar"=>"jaguar",
			"12345678"=>"12345678",
			"chelsea"=>"chelsea",
			"united"=>"united",
			"amateur"=>"amateur",
			"great"=>"great",
			"1234"=>"1234",
			"black"=>"black",
			"turtle"=>"turtle",
			"7777777"=>"7777777",
			"cool"=>"cool",
			"pussy"=>"pussy",
			"diamond"=>"diamond",
			"steelers"=>"steelers",
			"muffin"=>"muffin",
			"cooper"=>"cooper",
			"12345"=>"12345",
			"nascar"=>"nascar",
			"tiffany"=>"tiffany",
			"redsox"=>"redsox",
			"1313"=>"1313",
			"dragon"=>"dragon",
			"jackson"=>"jackson",
			"zxcvbn"=>"zxcvbn",
			"star"=>"star",
			"scorpio"=>"scorpio",
			"qwerty"=>"qwerty",
			"cameron"=>"cameron",
			"tomcat"=>"tomcat",
			"testing"=>"testing",
			"mountain"=>"mountain",
			"696969"=>"696969",
			"654321"=>"654321",
			"golf"=>"golf",
			"asddsa"=>"asddsa",
			"asdasd"=>"asdasd",
			"qweqwe"=>"qweqwe",
			"shannon"=>"shannon",
			"madison"=>"madison",
			"mustang"=>"mustang",
			"computer"=>"computer",
			"bond007"=>"bond007",
			"murphy"=>"murphy",
			"987654"=>"987654",
			"letmein"=>"letmein",
			"amanda"=>"amanda",
			"bear"=>"bear",
			"frank"=>"frank",
			"brazil"=>"brazil",
			"baseball"=>"baseball",
			"wizard"=>"wizard",
			"tiger"=>"tiger",
			"hannah"=>"hannah",
			"lauren"=>"lauren",
			"master"=>"master",
			"xxxxxxxx"=>"xxxxxxxx",
			"doctor"=>"doctor",
			"dave"=>"dave",
			"japan"=>"japan",
			"michael"=>"michael",
			"money"=>"money",
			"gateway"=>"gateway",
			"eagle1"=>"eagle1",
			"naked"=>"naked",
			"football"=>"football",
			"phoenix"=>"phoenix",
			"gators"=>"gators",
			"11111"=>"11111",
			"squirt"=>"squirt",
			"shadow"=>"shadow",
			"mickey"=>"mickey",
			"angel"=>"angel",
			"mother"=>"mother",
			"stars"=>"stars",
			"monkey"=>"monkey",
			"bailey"=>"bailey",
			"junior"=>"junior",
			"nathan"=>"nathan",
			"apple"=>"apple",
			"abc123"=>"abc123",
			"knight"=>"knight",
			"thx1138"=>"thx1138",
			"raiders"=>"raiders",
			"alexis"=>"alexis",
			"pass"=>"pass",
			"iceman"=>"iceman",
			"porno"=>"porno",
			"steve"=>"steve",
			"aaaa"=>"aaaa",
			"fuckme"=>"fuckme",
			"tigers"=>"tigers",
			"badboy"=>"badboy",
			"forever"=>"forever",
			"bonnie"=>"bonnie",
			"6969"=>"6969",
			"purple"=>"purple",
			"debbie"=>"debbie",
			"angela"=>"angela",
			"peaches"=>"peaches",
			"jordan"=>"jordan",
			"andrea"=>"andrea",
			"spider"=>"spider",
			"viper"=>"viper",
			"jasmine"=>"jasmine",
			"harley"=>"harley",
			"horny"=>"horny",
			"melissa"=>"melissa",
			"ou812"=>"ou812",
			"kevin"=>"kevin",
			"ranger"=>"ranger",
			"dakota"=>"dakota",
			"booger"=>"booger",
			"jake"=>"jake",
			"matt"=>"matt",
			"iwantu"=>"iwantu",
			"aaaaaa"=>"aaaaaa",
			"1212"=>"1212",
			"lovers"=>"lovers",
			"qwertyui"=>"qwertyui",
			"jennifer"=>"jennifer",
			"player"=>"player",
			"flyers"=>"flyers",
			"fuckit"=>"fuckit",
			"danielle"=>"danielle",
			"hunter"=>"hunter",
			"sunshine"=>"sunshine",
			"fish"=>"fish",
			"gregory"=>"gregory",
			"beaver"=>"beaver",
			"fuck"=>"fuck",
			"morgan"=>"morgan",
			"porn"=>"porn",
			"buddy"=>"buddy",
			"4321"=>"4321",
			"2000"=>"2000",
			"starwars"=>"starwars",
			"matrix"=>"matrix",
			"whatever"=>"whatever",
			"4128"=>"4128",
			"test"=>"test",
			"boomer"=>"boomer",
			"teens"=>"teens",
			"young"=>"young",
			"runner"=>"runner",
			"batman"=>"batman",
			"cowboys"=>"cowboys",
			"scooby"=>"scooby",
			"nicholas"=>"nicholas",
			"swimming"=>"swimming",
			"trustno1"=>"trustno1",
			"edward"=>"edward",
			"jason"=>"jason",
			"lucky"=>"lucky",
			"dolphin"=>"dolphin",
			"thomas"=>"thomas",
			"charles"=>"charles",
			"walter"=>"walter",
			"helpme"=>"helpme",
			"gordon"=>"gordon",
			"tigger"=>"tigger",
			"girls"=>"girls",
			"cumshot"=>"cumshot",
			"jackie"=>"jackie",
			"casper"=>"casper",
			"robert"=>"robert",
			"booboo"=>"booboo",
			"boston"=>"boston",
			"monica"=>"monica",
			"stupid"=>"stupid",
			"access"=>"access",
			"coffee"=>"coffee",
			"braves"=>"braves",
			"midnight"=>"midnight",
			"shit"=>"shit",
			"ove"=>"ove",
			"xxxxxx"=>"xxxxxx",
			"ankee"=>"ankee",
			"college"=>"college",
			"saturn"=>"saturn",
			"buster"=>"buster",
			"bulldog"=>"bulldog",
			"lover"=>"lover",
			"baby"=>"baby",
			"gemini"=>"gemini",
			"1234567"=>"1234567",
			"ncc1701"=>"ncc1701",
			"barney"=>"barney",
			"cunt"=>"cunt",
			"apples"=>"apples",
			"soccer"=>"soccer",
			"rabbit"=>"rabbit",
			"victor"=>"victor",
			"brian"=>"brian",
			"august"=>"august",
			"hockey"=>"hockey",
			"peanut"=>"peanut",
			"tucker"=>"tucker",
			"mark"=>"mark",
			"3333"=>"3333",
			"killer"=>"killer",
			"john"=>"john",
			"princess"=>"princess",
			"startrek"=>"startrek",
			"canada"=>"canada",
			"george"=>"george",
			"johnny"=>"johnny",
			"mercedes"=>"mercedes",
			"sierra"=>"sierra",
			"blazer"=>"blazer",
			"sexy"=>"sexy",
			"gandalf"=>"gandalf",
			"5150"=>"5150",
			"leather"=>"leather",
			"cumming"=>"cumming",
			"andrew"=>"andrew",
			"spanky"=>"spanky",
			"doggie"=>"doggie",
			"232323"=>"232323",
			"hunting"=>"hunting",
			"charlie"=>"charlie",
			"winter"=>"winter",
			"zzzzzz"=>"zzzzzz",
			"4444"=>"4444",
			"itty"=>"itty",
			"superman"=>"superman",
			"brandy"=>"brandy",
			"gunner"=>"gunner",
			"beavis"=>"beavis",
			"rainbow"=>"rainbow",
			"asshole"=>"asshole",
			"compaq"=>"compaq",
			"horney"=>"horney",
			"bigcock"=>"bigcock",
			"112233"=>"112233",
			"fuckyou"=>"fuckyou",
			"carlos"=>"carlos",
			"bubba"=>"bubba",
			"happy"=>"happy",
			"arthur"=>"arthur",
			"dallas"=>"dallas",
			"tennis"=>"tennis",
			"2112"=>"2112",
			"sophie"=>"sophie",
			"cream"=>"cream",
			"jessica"=>"jessica",
			"james"=>"james",
			"red"=>"red",
			"ladies"=>"ladies",
			"calvin"=>"calvin",
			"panties"=>"panties",
			"mike"=>"mike",
			"johnson"=>"johnson",
			"naughty"=>"naughty",
			"shaved"=>"shaved",
			"pepper"=>"pepper",
			"brandon"=>"brandon",
			"xxxxx"=>"xxxxx",
			"giants"=>"giants",
			"surfer"=>"surfer",
			"111"=>"111",
			"fender"=>"fender",
			"tits"=>"tits",
			"booty"=>"booty",
			"samson"=>"samson",
			"austin"=>"austin",
			"anthony"=>"anthony",
			"member"=>"member",
			"blonde"=>"blonde",
			"kelly"=>"kelly",
			"william"=>"william",
			"blowme"=>"blowme",
			"boobs"=>"boobs",
			"fucked"=>"fucked",
			"paul"=>"paul",
			"daniel"=>"daniel",
			"ferrari"=>"ferrari",
			"donald"=>"donald",
			"golden"=>"golden",
			"mine"=>"mine",
			"golfer"=>"golfer",
			"cookie"=>"cookie",
			"bigdaddy"=>"bigdaddy",
			"0"=>"0",
			"king"=>"king",
			"summer"=>"summer",
			"chicken"=>"chicken",
			"bronco"=>"bronco",
			"fire"=>"fire",
			"racing"=>"racing",
			"heather"=>"heather",
			"maverick"=>"maverick",
			"penis"=>"penis",
			"sandra"=>"sandra",
			"5555"=>"5555",
			"hammer"=>"hammer",
			"chicago"=>"chicago",
			"voyager"=>"voyager",
			"pookie"=>"pookie",
			"eagle"=>"eagle",
			"yankees"=>"yankees",
			"joseph"=>"joseph",
			"rangers"=>"rangers",
			"packers"=>"packers",
			"hentai"=>"hentai",
			"joshua"=>"joshua",
			"diablo"=>"diablo",
			"birdie"=>"birdie",
			"einstein"=>"einstein",
			"newyork"=>"newyork",
			"maggie"=>"maggie",
			"sexsex"=>"sexsex",
			"trouble"=>"trouble",
			"dolphins"=>"dolphins",
			"little"=>"little",
			"biteme"=>"biteme",
			"hardcore"=>"hardcore",
			"white"=>"white",
			"000000"=>"000000",
			"redwings"=>"redwings",
			"enter"=>"enter",
			"666666"=>"666666",
			"topgun"=>"topgun",
			"chevy"=>"chevy",
			"smith"=>"smith",
			"ashley"=>"ashley",
			"willie"=>"willie",
			"bigtits"=>"bigtits",
			"winston"=>"winston",
			"sticky"=>"sticky",
			"thunder"=>"thunder",
			"welcome"=>"welcome",
			"bitches"=>"bitches",
			"warrior"=>"warrior",
			"cocacola"=>"cocacola",
			"cowboy"=>"cowboy",
			"chris"=>"chris",
			"green"=>"green",
			"sammy"=>"sammy",
			"animal"=>"animal",
			"silver"=>"silver",
			"panther"=>"panther",
			"super"=>"super",
			"slut"=>"slut",
			"broncos"=>"broncos",
			"richard"=>"richard",
			"yamaha"=>"yamaha",
			"qwsx"=>"qwsx",
			"8675309"=>"8675309",
			"private"=>"private",
			"fucker"=>"fucker",
			"justin"=>"justin",
			"magic"=>"magic",
			"zxcvbnm"=>"zxcvbnm",
			"skippy"=>"skippy",
			"orange"=>"orange",
			"banana"=>"banana",
			"lakers"=>"lakers",
			"nipples"=>"nipples",
			"marvin"=>"marvin",
			"merlin"=>"merlin",
			"driver"=>"driver",
			"rachel"=>"rachel",
			"power"=>"power",
			"blondes"=>"blondes",
			"michelle"=>"michelle",
			"marine"=>"marine",
			"slayer"=>"slayer",
			"victoria"=>"victoria",
			"enjoy"=>"enjoy",
			"corvette"=>"corvette",
			"angels"=>"angels",
			"scott"=>"scott",
			"asdfgh"=>"asdfgh",
			"girl"=>"girl",
			"bigdog"=>"bigdog",
			"fishing"=>"fishing",
			"2222"=>"2222",
			"vagina"=>"vagina",
			"apollo"=>"apollo",
			"cheese"=>"cheese",
			"david"=>"david",
			"asdf"=>"asdf",
			"toyota"=>"toyota",
			"parker"=>"parker",
			"matthew"=>"matthew",
			"maddog"=>"maddog",
			"video"=>"video",
			"travis"=>"travis",
			"qwert"=>"qwert",
			"121212"=>"121212",
			"hooters"=>"hooters",
			"london"=>"london",
			"hotdog"=>"hotdog",
			"time"=>"time",
			"patrick"=>"patrick",
			"wilson"=>"wilson",
			"7777"=>"7777",
			"paris"=>"paris",
			"sydney"=>"sydney",
			"martin"=>"martin",
			"butthead"=>"butthead",
			"marlboro"=>"marlboro",
			"rock"=>"rock",
			"women"=>"women",
			"freedom"=>"freedom",
			"dennis"=>"dennis",
			"srinivas"=>"srinivas",
			"xxxx"=>"xxxx",
			"voodoo"=>"voodoo",
			"ginger"=>"ginger",
			"fucking"=>"fucking",
			"internet"=>"internet",
			"extreme"=>"extreme",
			"magnum"=>"magnum",
			"blowjob"=>"blowjob",
			"captain"=>"captain",
			"action"=>"action",
			"redskins"=>"redskins",
			"juice"=>"juice",
			"nicole"=>"nicole",
			"bigdick"=>"bigdick",
			"carter"=>"carter",
			"erotic"=>"erotic",
			"abgrtyu"=>"abgrtyu",
			"sparky"=>"sparky",
			"chester"=>"chester",
			"jasper"=>"jasper",
			"dirty"=>"dirty",
			"777777"=>"777777",
			"yellow"=>"yellow",
			"smokey"=>"smokey",
			"monster"=>"monster",
			"ford"=>"ford",
			"dreams"=>"dreams",
			"camaro"=>"camaro",
			"xavier"=>"xavier",
			"teresa"=>"teresa",
			"freddy"=>"freddy",
			"maxwell"=>"maxwell",
			"secret"=>"secret",
			"steven"=>"steven",
			"jeremy"=>"jeremy",
			"arsenal"=>"arsenal",
			"music"=>"music",
			"dick"=>"dick",
			"viking"=>"viking",
			"11111111"=>"11111111",
			"access14"=>"access14",
			"rush2112"=>"rush2112",
			"falcon"=>"falcon",
			"snoopy"=>"snoopy",
			"bill"=>"bill",
			"wolf"=>"wolf",
			"russia"=>"russia",
			"taylor"=>"taylor",
			"blue"=>"blue",
			"crystal"=>"crystal",
			"nipple"=>"nipple",
			"scorpion"=>"scorpion",
			"111111"=>"111111",
			"eagles"=>"eagles",
			"peter"=>"peter",
			"iloveyou"=>"iloveyou",
			"rebecca"=>"rebecca",
			"131313"=>"131313",
			"winner"=>"winner",
			"pussies"=>"pussies",
			"alex"=>"alex",
			"tester"=>"tester",
			"123123"=>"123123",
			"samantha"=>"samantha",
			"cock"=>"cock",
			"florida"=>"florida",
			"mistress"=>"mistress",
			"bitch"=>"bitch",
			"house"=>"house",
			"beer"=>"beer",
			"eric"=>"eric",
			"phantom"=>"phantom",
			"hello"=>"hello",
			"miller"=>"miller",
			"rocket"=>"rocket",
			"legend"=>"legend",
			"billy"=>"billy",
			"scooter"=>"scooter",
			"flower"=>"flower",
			"theman"=>"theman",
			"movie"=>"movie",
			"666666"=>"666666",
			"please"=>"please",
			"jack"=>"jack",
			"oliver"=>"oliver",
			"success"=>"success",
			"albert"=>"albert",


		);
	}

}