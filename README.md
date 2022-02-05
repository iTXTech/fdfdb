# fdfdb

[FlashDetector](https://github.com/iTXTech/FlashDetector) (RAW) Flash Database

## Controller Vendors

1. `al` - *Alcor Micro*
1. `cbm` - *ChipsBank*
1. `is` - *Innostor* - Now a part of ASolid
1. `jm` - *JMicron* - Now its SSD Controller department is `Maxiotek`
1. `mk` - *Maxiotek* - `HIKVISION` is its major shareholder
1. `ma` - *Maxio* - Same as above, new identity of `Maxiotek`
1. `sf` - *SandForce* - Now a part of Seagate
1. `smufd` - *SiliconMotion* - UFD controller
1. `smssd` - *SiliconMotion* - SSD controller
1. `smff` - *SiliconMotion* - ForceFlash

## Excluded Vendors

1. `ps` - *PHISON* - Mainly used by `Kingston`, `Toshiba`
1. `sss` - *Solid State System* - The same as `PHISON`
1. `mw` - *Micov*

## Additional Folders

1. `tools` - Including some tools for processing fdb
1. `archives` - Including PDFs

## `extra.json` Format

The full `iTXTech FlashDetector Flash Database Documentation` is [here](https://github.com/iTXTech/FlashDetector/blob/master/FlashDatabase.md).

```json
{
    "Vendor":{
        "Part number": {
            "id": ["Flash Id 0", "Flash Id 1"],
            "fid": ["Flash Id 0", "Flash Id 1"], // Overwrite all FlashIds, do not use fid with id
            "l": "Process node",
            "c": "Cell level",
            "t": ["Controller 0", "Controller 1"],
            "m": "Additional Info",
            "d": 8,//Die
            "e": 2,//CE
            "r": 4,//Rb
            "n": 1,//Channel
        }
    }
}
```

Special remark for SanDisk: `CODE`, `Txxxx`

`CODE` means there's only one CE and need to short all CE pins and Rb pins.

`Txxx` is the codename corresponding to Toshiba, like `T0DFK`, `T9THL`, `T2T24`

## Contribution

If you have a PDF file, please submit an issue and upload it.

If you have a RAW fdb file, please submit a pull request.

Any FDB file should be public and accessible to anyone.

## License

CC BY-NC-SA 4.0
