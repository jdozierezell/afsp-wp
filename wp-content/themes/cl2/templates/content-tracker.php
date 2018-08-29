<main class="main">
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="entry-content">
        <p>
            <strong>
                Please use the Program Tracker to enter information after each AFSP program is completed. 
                This helps us track the impact and other essential information related to your program!
            </strong>
        </p> 
        <h3>
            <a href="https://www.afsp.org/ProgramTracker" target="_blank">
                Click here to enter your completed program's information.
            </a>
        </h3>
        <p>
            To view a chapter report, begin by choosing one of the options below.
        </p>
        <!-- 2018 Links -->
        <h3 style="background-color: #396dff; color: #fff; padding-left: 1rem">2018</h3>
        <h4>Choose Your Chapter</h4>
        <?php $survey = 'https://www.surveymonkey.com/results/'; ?>
        <select name="chapter_select_18" id="chapter_select_18" data-selected="no">   
            <option id="not-selected"></option>
            <option id="alabama" 
            data-url="<?php echo esc_url($survey); ?>SM-XFQKCW6H8/" 
            data-division="Southern">
                Alabama
            </option>
            <option id="alaska" 
            data-url="<?php echo esc_url($survey); ?>SM-WQDKSW6H8/" 
            data-division="Western">
                Alaska
            </option>
            <option id="arizona" 
            data-url="<?php echo esc_url($survey); ?>SM-38BTTW6H8/" 
            data-division="Western">
                Arizona
            </option>
            <option id="arkansas" 
            data-url="<?php echo esc_url($survey); ?>SM-QZBYNW6H8/" 
            data-division="Central">
                Arkansas
            </option>
            <option id="capital-region-new-york" 
            data-url="<?php echo esc_url($survey); ?>SM-F9ZBRG6H8/" 
            data-division="Eastern">
                Capital Region New York
            </option>
            <option id="central-florida" 
            data-url="<?php echo esc_url($survey); ?>SM-MVWJ6R6H8/" 
            data-division="Southern">
                Central Florida
            </option>
            <option id="central-new-york" 
            data-url="<?php echo esc_url($survey); ?>SM-K3VMMG6H8/" 
            data-division="Eastern">
                Central New York
            </option>
            <option id="central-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-76YFMB6H8/" 
            data-division="Eastern">
                Central Pennsylvania
            </option>
            <option id="central-texas" 
            data-url="<?php echo esc_url($survey); ?>SM-3W93VZ6H8/" 
            data-division="Central">
                Central Texas
            </option>
            <option id="central-valley-california" 
            data-url="<?php echo esc_url($survey); ?>SM-5X7P5W6H8/" 
            data-division="Western">
                Central Valley California
            </option>
            <option id="colorado" 
            data-url="<?php echo esc_url($survey); ?>SM-QPLKYR6H8/" 
            data-division="Western">
                Colorado
            </option>
            <option id="connecticut"
            data-url="<?php echo esc_url($survey); ?>SM-KWLBTR6H8/"
            data-division="Eastern">
                Connecticut
            </option>
            <option id="delaware" 
            data-url="<?php echo esc_url($survey); ?>SM-VQDPXR6H8/" 
            data-division="Eastern">
                Delaware
            </option>
            <option id="eastern-missouri" 
            data-url="<?php echo esc_url($survey); ?>SM-8NS85F6H8/" 
            data-division="Central">
                Eastern Missouri
            </option>
            <option id="florida-panhandle" 
            data-url="<?php echo esc_url($survey); ?>SM-H6C3KT6H8/" 
            data-division="Southern">
                Florida Panhandle
            </option>
            <option id="georgia" 
            data-url="<?php echo esc_url($survey); ?>SM-BJD3BM6H8/" 
            data-division="Southern">
                Georgia
            </option>
            <option id="greater-boston" 
            data-url="<?php echo esc_url($survey); ?>SM-BYNB9F6H8/" 
            data-division="Eastern">
                Greater Boston
            </option>
            <option id="greater-kansas" 
            data-url="<?php echo esc_url($survey); ?>SM-VWS32N6H8/" 
            data-division="Central">
                Greater Kansas
            </option>
            <option id="greater-lehigh-valley-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-XDY3FB6H8/" 
            data-division="Eastern">
                Greater Lehigh Valley Pennsylvania
            </option>
            <option id="greater-los-angeles" 
            data-url="<?php echo esc_url($survey); ?>SM-8GN3LS6H8/" 
            data-division="Western">
                Greater Los Angeles
            </option>
            <option id="greater-mid-missouri" 
            data-url="<?php echo esc_url($survey); ?>SM-2WQQL36H8/" 
            data-division="Central">
                Greater Mid-Missouri
            </option>
            <option id="greater-minnesota" 
            data-url="<?php echo esc_url($survey); ?>SM-J55JTF6H8/" 
            data-division="Central">
                Greater Minnesota
            </option>
            <option id="greater-northeast-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-6PBYBB6H8/" 
            data-division="Eastern">
                Greater Northeast Pennsylvania
            </option>
            <option id="greater-philadelphia" 
            data-url="<?php echo esc_url($survey); ?>SM-3MXYZB6H8/" 
            data-division="Eastern">
                Greater Philadelphia
            </option>
            <option id="greater-sacramento" 
            data-url="<?php echo esc_url($survey); ?>SM-BVWBWS6H8/" 
            data-division="Western">
                Greater Sacramento
            </option>
            <option id="greater-san-francisco" 
            data-url="<?php echo esc_url($survey); ?>SM-97J6GS6H8/" 
            data-division="Western">
                Greater San Francisco
            </option>
            <option id="hawaii" 
            data-url="<?php echo esc_url($survey); ?>SM-HXLQZM6H8/" 
            data-division="Western">
                Hawaii
            </option>
            <option id="hudson-valley" 
            data-url="<?php echo esc_url($survey); ?>SM-CDCCNG6H8/" 
            data-division="Eastern">
                Hudson Valley/Westchester
            </option>
            <option id="idaho" 
            data-url="<?php echo esc_url($survey); ?>SM-B7FNVX6H8/" 
            data-division="Western">
                Idaho
            </option>
            <option id="illinois" 
            data-url="<?php echo esc_url($survey); ?>SM-FMG8DX6H8/" 
            data-division="Central">
                Illinois
            </option>
            <option id="indiana" 
            data-url="<?php echo esc_url($survey); ?>SM-ZJFQCX6H8/" 
            data-division="Central">
                Indiana
            </option>
            <option id="inland-empire-and-desert-cities" 
            data-url="<?php echo esc_url($survey); ?>SM-WZYY6S6H8/" 
            data-division="Western">
                Inland Empire and Desert Cities
            </option>
            <option id="iowa" 
            data-url="<?php echo esc_url($survey); ?>SM-CM2ZVN6H8/" 
            data-division="Central">
                Iowa
            </option>
            <option id="kentucky" 
            data-url="<?php echo esc_url($survey); ?>SM-XQT6FN6H8/" 
            data-division="Eastern">
                Kentucky
            </option>
            <option id="louisiana" 
            data-url="<?php echo esc_url($survey); ?>SM-S55LHN6H8/" 
            data-division="Southern">
                Louisiana
            </option>
            <option id="maine" 
            data-url="<?php echo esc_url($survey); ?>SM-TLR56N6H8/" 
            data-division="Eastern">
                Maine
            </option>
            <option id="maryland" 
            data-url="<?php echo esc_url($survey); ?>SM-JB258F6H8/" 
            data-division="Eastern">
                Maryland
            </option>
            <option id="metro-detroit-ann-arbor" 
            data-url="<?php echo esc_url($survey); ?>SM-FL5NWF6H8/" 
            data-division="Central">
                Michigan
            </option>
            <option id="mississippi" 
            data-url="<?php echo esc_url($survey); ?>SM-JGWCPF6H8/" 
            data-division="Southern">
                Mississippi
            </option>
            <option id="montana" 
            data-url="<?php echo esc_url($survey); ?>SM-HSNHV36H8/" 
            data-division="Western">
                Montana
            </option>
            <option id="national-capital-area" 
            data-url="<?php echo esc_url($survey); ?>SM-5ZN8GR6H8/" 
            data-division="Eastern">
                National Capital Area
            </option>
            <option id="nebraska" 
            data-url="<?php echo esc_url($survey); ?>SM-8H7SW36H8/" 
            data-division="Central">
                Nebraska
            </option>
            <option id="nevada" 
            data-url="<?php echo esc_url($survey); ?>SM-6JXNT36H8/" 
            data-division="Western">
                Nevada
            </option>
            <option id="new-hampshire" 
            data-url="<?php echo esc_url($survey); ?>SM-ZXSCF36H8/" 
            data-division="Eastern">
                New Hampshire
            </option>
            <option id="new-jersey"
            data-url="<?php echo esc_url($survey); ?>SM-NGJ3636H8/"
            data-division="Eastern">
                New Jersey
            </option>
            <option id="new-mexico" 
            data-url="<?php echo esc_url($survey); ?>SM-JF38SG6H8/" 
            data-division="Western">
                New Mexico
            </option>
            <option id="new-york-city" 
            data-url="<?php echo esc_url($survey); ?>SM-VLRVHG6H8/" 
            data-division="Eastern">
                New York City
            </option>
            <option id="new-york-long-island" 
            data-url="<?php echo esc_url($survey); ?>SM-855D3G6H8/" 
            data-division="Eastern">
                New York Long Island
            </option>
            <option id="north-carolina" 
            data-url="<?php echo esc_url($survey); ?>SM-KM2B236H8/" 
            data-division="Southern">
                North Carolina
            </option>
            <option id="north-dakota" 
            data-url="<?php echo esc_url($survey); ?>SM-5QQYYB6H8/" 
            data-division="Central">
                North Dakota
            </option>
            <option id="north-florida" 
            data-url="<?php echo esc_url($survey); ?>SM-5Y9YRM6H8/" 
            data-division="Southern">
                North Florida
            </option>
            <option id="north-texas" 
            data-url="<?php echo esc_url($survey); ?>SM-DNBZ9Z6H8/" 
            data-division="Central">
                North Texas
            </option>
            <option id="ohio" 
            data-url="<?php echo esc_url($survey); ?>SM-N2W5CB6H8/" 
            data-division="Central">
                Ohio
            </option>
            <option id="oklahoma" 
            data-url="<?php echo esc_url($survey); ?>SM-J8V6QB6H8/" 
            data-division="Central">
                Oklahoma
            </option>
            <option id="orange-county" 
            data-url="<?php echo esc_url($survey); ?>SM-VH255S6H8/" 
            data-division="Western">
                Orange County
            </option>
            <option id="oregon" 
            data-url="<?php echo esc_url($survey); ?>SM-YS92RB6H8/" 
            data-division="Western">
                Oregon
            </option>
            <option id="rhode-island" 
            data-url="<?php echo esc_url($survey); ?>SM-3JLDYH6H8/" 
            data-division="Eastern">
                Rhode Island
            </option>
            <option id="san-diego" 
            data-url="<?php echo esc_url($survey); ?>SM-DBW8LR6H8/" 
            data-division="Western">
                San Diego
            </option>
            <option id="south-carolina" 
            data-url="<?php echo esc_url($survey); ?>SM-PL2MF66H8/" 
            data-division="Southern">
                South Carolina
            </option>
            <option id="south-central-new-york" 
            data-url="<?php echo esc_url($survey); ?>SM-3DYW5G6H8/" 
            data-division="Eastern">
                South Central New York
            </option>
            <option id="south-central-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-9ZM28H6H8/" 
            data-division="Eastern">
                South Central Pennsylvania
            </option>
            <option id="south-dakota" 
            data-url="<?php echo esc_url($survey); ?>SM-WQQFP66H8/" 
            data-division="Central">
                South Dakota
            </option>
            <option id="south-texas" 
            data-url="<?php echo esc_url($survey); ?>SM-RLHWXZ6H8/" 
            data-division="Central">
                South Texas
            </option>
            <option id="southeast-florida" 
            data-url="<?php echo esc_url($survey); ?>SM-3CWVVT6H8/" 
            data-division="Southern">
                Southeast Florida
            </option>
            <option id="southeast-minnesota" 
            data-url="<?php echo esc_url($survey); ?>SM-5VGFFF6H8/" 
            data-division="Central">
                Southeast Minnesota
            </option>
            <option id="southeast-texas" 
            data-url="<?php echo esc_url($survey); ?>SM-BC7TTZ6H8/" 
            data-division="Central">
                Southeast Texas
            </option>
            <option id="southwest-florida" 
            data-url="<?php echo esc_url($survey); ?>SM-H2M99T6H8/" 
            data-division="Southern">
                Southwest Florida
            </option>
            <option id="tampa-bay" 
            data-url="<?php echo esc_url($survey); ?>SM-QGRLNM6H8/" 
            data-division="Southern">
                Tampa Bay
            </option>
            <option id="tennessee"
            data-url="<?php echo esc_url($survey); ?>SM-B7SVLZ6H8/"
            data-division="Southern">
                Tennessee
            </option>
            <option id="utah" 
            data-url="<?php echo esc_url($survey); ?>SM-CBXWGZ6H8/" 
            data-division="Western">
                Utah
            </option>
            <option id="vermont" 
            data-url="<?php echo esc_url($survey); ?>SM-XW9KPZ6H8/" 
            data-division="Eastern">
                Vermont
            </option>
            <option id="virginia" 
            data-url="<?php echo esc_url($survey); ?>SM-YSMR5Z6H8/" 
            data-division="Eastern">
                Virginia
            </option>
            <option id="washington" 
            data-url="<?php echo esc_url($survey); ?>SM-CMLQL56H8/" 
            data-division="Western">
                Washington
            </option>
            <option id="west-virginia" 
            data-url="<?php echo esc_url($survey); ?>SM-XDNZ756H8/" 
            data-division="Eastern">
                West Virginia
            </option>
            <option id="western-massachusetts" 
            data-url="<?php echo esc_url($survey); ?>SM-W28CCF6H8/" 
            data-division="Eastern">
                Western Massachusetts
            </option>
            <option id="western-new-york" 
            data-url="<?php echo esc_url($survey); ?>SM-XNCH8B6H8/" 
            data-division="Eastern">
                Western New York
            </option>
            <option id="western-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-Y8V97H6H8/" 
            data-division="Eastern">
                Western Pennsylvania
            </option>
            <option id="wisconsin" 
            data-url="<?php echo esc_url($survey); ?>SM-VWY9Y56H8/" 
            data-division="Central">
                Wisconsin
            </option>
            <option id="wyoming" 
            data-url="<?php echo esc_url($survey); ?>SM-WZWZ256H8/" 
            data-division="Western">
                Wyoming
            </option>
        </select> 
        <div id="chapter_program_18" style="display:none">
            <h4>Chapter Program Tracking Links</h4>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
        </div>
        <h4>Choose Your Program</h4>
        <select name="program_select_18" id="program_select_18">
            <option id="not-selected"></option>
            <option id="abft" 
            data-all="<?php echo esc_url($survey); ?>SM-MJB972ZH8/">
                ABFT
            </option>
            <option id="asist" 
            data-all="<?php echo esc_url($survey); ?>SM-XXNPY2ZH8/">
                ASIST
            </option>
            <option id="asist-facilitator" 
            data-all="<?php echo esc_url($survey); ?>SM-VHYVJ2ZH8/">
                ASIST Facilitator
            </option>
            <option id="depression-&-bipolar-awareness" 
            data-all="<?php echo esc_url($survey); ?>SM-KNM5M2ZH8/">
                Depression &amp; Bipolar Awareness
            </option>
            <option id="its-real-college-film" 
            data-all="<?php echo esc_url($survey); ?>SM-RH9DF2ZH8/">
                It's Real: College Film
            </option>
            <option id="living-w−bipolar" 
            data-all="<?php echo esc_url($survey); ?>SM-XBC2G2ZH8/">
                Living w/Bipolar
            </option>
            <option id="mhfa-facilitator" 
            data-all="<?php echo esc_url($survey); ?>SM-SJBSP2ZH8/">
                MHFA Facilitator
            </option>
            <option id="mhfa-adult" 
            data-all="<?php echo esc_url($survey); ?>SM-9VSQZ2ZH8/">
                MHFA Adult
            </option>
            <option id="mhfa-youth" 
            data-all="<?php echo esc_url($survey); ?>SM-F2LNKCZH8/">
                MHFA Youth
            </option>
            <option id="mts-facilitator" 
            data-all="<?php echo esc_url($survey); ?>SM-5ZX9VCZH8/">
                MTS Facilitator
            </option>
            <option id="mts-educator" 
            data-all="<?php echo esc_url($survey); ?>SM-6KNGYSMS/">
                MTS Educator
            </option>
            <option id="mts-parent" 
            data-all="<?php echo esc_url($survey); ?>SM-X5K3DCZH8/">
                MTS Parent
            </option>
            <option id="mts-parent-spanish" 
            data-all="<?php echo esc_url($survey); ?>SM-3Z7B2CZH8/">
                MTS Parent Spanish
            </option>
            <option id="mts-teen" 
            data-all="<?php echo esc_url($survey); ?>SM-8SJTJCZH8/">
                MTS Teen
            </option>
            <option id="out-of-the-silence-physicians-suicide" 
            data-all="<?php echo esc_url($survey); ?>SM-7WRXWCZH8/">
                Out of the Silence: Physicians & Suicide
            </option>
            <option id="research-connection-program" 
            data-all="<?php echo esc_url($survey); ?>SM-9FJ2MCZH8/">
                Research Connection Program
            </option>
            <option id="safetalk" 
            data-all="<?php echo esc_url($survey); ?>SM-X73V3CZH8/">
                safeTALK
            </option>
            <option id="safetalk-facilitator" 
            data-all="<?php echo esc_url($survey); ?>SM-6BYFBCZH8/">
                safeTALK Facilitator
            </option>
            <option id="stronger-communities-lgbtq+-suicide-prevention-conference" 
            data-all="<?php echo esc_url($survey); ?>SM-THN9ZCZH8/">
                Stronger Communities: LGBTQ+ Suicide Prevention Conference 
            </option>
            <option id="struggling-in-silence-physicians-suicide" 
            data-all="<?php echo esc_url($survey); ?>SM-NBBYKJZH8/">
                Struggling in Silence: Physicians & Suicide
            </option>
            <option id="suicide-bereavement-clinician-training" 
            data-all="<?php echo esc_url($survey); ?>SM-7KWRLJZH8/">
                Suicide Bereavement Clinician Training
            </option>
            <option id="suicide-loss-support-group-facilitator-adult" 
            data-all="<?php echo esc_url($survey); ?>SM-MSGCDJZH8/">
                Suicide Loss Support Group Facilitator - Adult
            </option>
            <option id="suicide-loss-support-group-facilitator-youth" 
            data-all="<?php echo esc_url($survey); ?>SM-X3XKJJZH8/">
                Suicide Loss Support Group Facilitator - Youth
            </option>
            <option id="tsl-all-versions" 
            data-all="<?php echo esc_url($survey); ?>SM-KJCNRJZH8/">
                TSL - All Versions
            </option>
            <option id="tsl-firearms" 
            data-all="<?php echo esc_url($survey); ?>SM-NJ37NJZH8/">
                TSL Firearms
            </option>
            <option id="tsl-lgbt" 
            data-all="<?php echo esc_url($survey); ?>SM-67NRGJZH8/">
                TSL LGBT
            </option>
            <option id="tsl-seniors" 
            data-all="<?php echo esc_url($survey); ?>SM-QJYGHJZH8/">
                TSL Seniors
            </option>
            <option id="tsl-spanish" 
            data-all="<?php echo esc_url($survey); ?>SM-3PWR6JZH8/">
                TSL Spanish
            </option>
            <option id="tsl-standard" 
            data-all="<?php echo esc_url($survey); ?>SM-QGSDKQZH8/">
                TSL Standard
            </option>
            <option id="truth-about-suicide-college-film" 
            data-all="<?php echo esc_url($survey); ?>SM-6ZLSLQZH8/">
                Truth About Suicide: College Film
            </option>
            <option id="other-information-booth-table-at-event" 
            data-all="<?php echo esc_url($survey); ?>SM-58XC9QZH8/">
                Other: Information Booth/Table at Event
            </option>
            <option id="other-community-presenation" 
            data-all="<?php echo esc_url($survey); ?>SM-L8GQYQZH8/">
                Other: Community Presentation
            </option>
            <option id="other-suicide-prevention-gatekeeper-training" 
            data-all="<?php echo esc_url($survey); ?>SM-MDJNCQZH8/">
                Other: Suicide Prevention/Gatekeeper Training
            </option>
            <option id="other" 
            data-all="<?php echo esc_url($survey); ?>SM-F9R3QQZH8/">
                Other
            </option>
        </select>
        <div id="program_division_18" style="display:none">
            <h4>Program Tracking Link</h4>
            <p></p>
        </div>
        <!-- 2017 Links -->
        <h3 style="background-color: #396dff; color: #fff; padding-left: 1rem">2017</h3>
        <h4>Choose Your Chapter</h4>
        <select name="chapter_select_17" id="chapter_select_17" data-selected="no">            
            <option id="not-selected"></option>
            <option id="alabama" 
            data-url="<?php echo esc_url($survey); ?>SM-87SCZT23/" 
            data-division="Southern">
                Alabama
            </option>
            <option id="alaska" 
            data-url="<?php echo esc_url($survey); ?>SM-DHPBZT23/" 
            data-division="Western">
                Alaska
            </option>
            <option id="arizona" 
            data-url="<?php echo esc_url($survey); ?>SM-5Q9Z5T23/" 
            data-division="Western">
                Arizona
            </option>
            <option id="arkansas" 
            data-url="<?php echo esc_url($survey); ?>SM-JNNLKM23/" 
            data-division="Central">
                Arkansas
            </option>
            <option id="capital-region-new-york" 
            data-url="<?php echo esc_url($survey); ?>SM-BFXTWRJ3/" 
            data-division="Eastern">
                Capital Region New York
            </option>
            <option id="central-florida" 
            data-url="<?php echo esc_url($survey); ?>SM-XCC83QJ3/" 
            data-division="Southern">
                Central Florida
            </option>
            <option id="central-new-jersey" 
            data-url="<?php echo esc_url($survey); ?>SM-PDDT6SJ3/" 
            data-division="Eastern">
                Central New Jersey
            </option>
            <option id="central-new-york" 
            data-url="<?php echo esc_url($survey); ?>SM-ZRQHSRJ3/" 
            data-division="Eastern">
                Central New York
            </option>
            <option id="central-ohio" 
            data-url="<?php echo esc_url($survey); ?>SM-XBNKGRJ3/" 
            data-division="Central">
                Central Ohio
            </option>
            <option id="central-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-YQ5QRTJ3/" 
            data-division="Eastern">
                Central Pennsylvania
            </option>
            <option id="central-texas" 
            data-url="<?php echo esc_url($survey); ?>SM-MSLLDMJ3/" 
            data-division="Central">
                Central Texas
            </option>
            <option id="central-valley-california" 
            data-url="<?php echo esc_url($survey); ?>SM-ZTT3KM23/" 
            data-division="Western">
                Central Valley California
            </option>
            <option id="cincinnati" 
            data-url="<?php echo esc_url($survey); ?>SM-MZKHGRJ3/" 
            data-division="Central">
                Cincinnati
            </option>
            <option id="colorado" 
            data-url="<?php echo esc_url($survey); ?>SM-9GFT2M23/" 
            data-division="Western">
                Colorado
            </option>
            <option id="delaware" 
            data-url="<?php echo esc_url($survey); ?>SM-L6HVRQJ3/" 
            data-division="Eastern">
                Delaware
            </option>
            <option id="eastern-missouri" 
            data-url="<?php echo esc_url($survey); ?>SM-QTPNHWJ3/" 
            data-division="Central">
                Eastern Missouri
            </option>
            <option id="florida-panhandle" 
            data-url="<?php echo esc_url($survey); ?>SM-N5Q9KWJ3/" 
            data-division="Southern">
                Florida Panhandle
            </option>
            <option id="florida-southeast" 
            data-url="<?php echo esc_url($survey); ?>SM-R7N6ZQJ3/" 
            data-division="Southern">
                Florida Southeast
            </option>
            <option id="florida-southwest" 
            data-url="<?php echo esc_url($survey); ?>SM-LLTT5QJ3/" 
            data-division="Southern">
                Florida Southwest
            </option>
            <option id="georgia" 
            data-url="<?php echo esc_url($survey); ?>SM-FD2PVWJ3/" 
            data-division="Southern">
                Georgia
            </option>
            <option id="greater-boston" 
            data-url="<?php echo esc_url($survey); ?>SM-HW2XCWJ3/" 
            data-division="Eastern">
                Greater Boston
            </option>
            <option id="greater-kansas" 
            data-url="<?php echo esc_url($survey); ?>SM-TB38YWJ3/" 
            data-division="Central">
                Greater Kansas
            </option>
            <option id="greater-lehigh-valley-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-M679MTJ3/" 
            data-division="Eastern">
                Greater Lehigh Valley Pennsylvania
            </option>
            <option id="greater-los-angeles" 
            data-url="<?php echo esc_url($survey); ?>SM-RPNH9M23/" 
            data-division="Western">
                Greater Los Angeles
            </option>
            <option id="greater-mid-missouri" 
            data-url="<?php echo esc_url($survey); ?>SM-MKGL9SJ3/" 
            data-division="Central">
                Greater Mid-Missouri
            </option>
            <option id="greater-minnesota" 
            data-url="<?php echo esc_url($survey); ?>SM-FB9GGWJ3/" 
            data-division="Central">
                Greater Minnesota
            </option>
            <option id="greater-northeast-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-CRS2XTJ3/" 
            data-division="Eastern">
                Greater Northeast Pennsylvania
            </option>
            <option id="greater-philadelphia" 
            data-url="<?php echo esc_url($survey); ?>SM-6QJZXTJ3/" 
            data-division="Eastern">
                Greater Philadelphia
            </option>
            <option id="greater-sacramento" 
            data-url="<?php echo esc_url($survey); ?>SM-VY598M23/" 
            data-division="Western">
                Greater Sacramento
            </option>
            <option id="greater-san-francisco" 
            data-url="<?php echo esc_url($survey); ?>SM-8TFBLM23/" 
            data-division="Western">
                Greater San Francisco
            </option>
            <option id="hawaii" 
            data-url="<?php echo esc_url($survey); ?>SM-Y79R7WJ3/" 
            data-division="Western">
                Hawaii
            </option>
            <option id="hudson-valley" 
            data-url="<?php echo esc_url($survey); ?>SM-RW2SRRJ3/" 
            data-division="Eastern">
                Hudson Valley
            </option>
            <option id="idaho" 
            data-url="<?php echo esc_url($survey); ?>SM-XRKS9WJ3/" 
            data-division="Western">
                Idaho
            </option>
            <option id="illinois" 
            data-url="<?php echo esc_url($survey); ?>SM-8XVH7WJ3/" 
            data-division="Central">
                Illinois
            </option>
            <option id="indiana" 
            data-url="<?php echo esc_url($survey); ?>SM-WHM57WJ3/" 
            data-division="Central">
                Indiana
            </option>
            <option id="inland-empire-and-desert-cities" 
            data-url="<?php echo esc_url($survey); ?>SM-ZZG99M23/" 
            data-division="Western">
                Inland Empire and Desert Cities
            </option>
            <option id="iowa" 
            data-url="<?php echo esc_url($survey); ?>SM-Q5ZG9WJ3/" 
            data-division="Central">
                Iowa
            </option>
            <option id="kentucky" 
            data-url="<?php echo esc_url($survey); ?>SM-RZLPYWJ3/" 
            data-division="Eastern">
                Kentucky
            </option>
            <option id="louisiana" 
            data-url="<?php echo esc_url($survey); ?>SM-2Q892WJ3/" 
            data-division="Southern">
                Louisiana
            </option>
            <option id="maine" 
            data-url="<?php echo esc_url($survey); ?>SM-LP5S2WJ3/" 
            data-division="Eastern">
                Maine
            </option>
            <option id="maryland" 
            data-url="<?php echo esc_url($survey); ?>SM-P2ZB2WJ3/" 
            data-division="Eastern">
                Maryland
            </option>
            <option id="memphis-mid-south" 
            data-url="<?php echo esc_url($survey); ?>SM-DVYV9MJ3/" 
            data-division="Southern">
                Memphis/Mid-South
            </option>
            <option id="metro-detroit-ann-arbor" 
            data-url="<?php echo esc_url($survey); ?>SM-3YXSMWJ3/" 
            data-division="Central">
                Metro Detroit/Ann Arbor
            </option>
            <option id="middle-tennessee" 
            data-url="<?php echo esc_url($survey); ?>SM-XC3Y9MJ3/" 
            data-division="Southern">
                Middle Tennessee
            </option>
            <option id="mississippi" 
            data-url="<?php echo esc_url($survey); ?>SM-WQRPBWJ3/" 
            data-division="Southern">
                Mississippi
            </option>
            <option id="montana" 
            data-url="<?php echo esc_url($survey); ?>SM-CX8DDSJ3/" 
            data-division="Western">
                Montana
            </option>
            <option id="national-capital-area" 
            data-url="<?php echo esc_url($survey); ?>SM-88DZRQJ3/" 
            data-division="Eastern">
                National Capital Area
            </option>
            <option id="nebraska" 
            data-url="<?php echo esc_url($survey); ?>SM-5BV7HSJ3/" 
            data-division="Central">
                Nebraska
            </option>
            <option id="nevada" 
            data-url="<?php echo esc_url($survey); ?>SM-7RTXHSJ3/" 
            data-division="Western">
                Nevada
            </option>
            <option id="new-hampshire" 
            data-url="<?php echo esc_url($survey); ?>SM-RPJMPSJ3/" 
            data-division="Eastern">
                New Hampshire
            </option>
            <option id="new-mexico" 
            data-url="<?php echo esc_url($survey); ?>SM-XKDLWRJ3/" 
            data-division="Western">
                New Mexico
            </option>
            <option id="new-york-city" 
            data-url="<?php echo esc_url($survey); ?>SM-KN6FMRJ3/" 
            data-division="Eastern">
                New York City
            </option>
            <option id="new-york-long-island" 
            data-url="<?php echo esc_url($survey); ?>SM-8RT6TRJ3/" 
            data-division="Eastern">
                New York Long Island
            </option>
            <option id="north-carolina" 
            data-url="<?php echo esc_url($survey); ?>SM-F7MM3SJ3/" 
            data-division="Southern">
                North Carolina
            </option>
            <option id="north-dakota" 
            data-url="<?php echo esc_url($survey); ?>SM-NN2D3RJ3/" 
            data-division="Central">
                North Dakota
            </option>
            <option id="north-florida" 
            data-url="<?php echo esc_url($survey); ?>SM-MSFh4QJ3/" 
            data-division="Southern">
                North Florida
            </option>
            <option id="north-texas" 
            data-url="<?php echo esc_url($survey); ?>SM-CLQ9YMJ3/" 
            data-division="Central">
                North Texas
            </option>
            <option id="northern-connecticut" 
            data-url="<?php echo esc_url($survey); ?>SM-J79DWQJ3/" 
            data-division="Eastern">
                Northern Connecticut
            </option>
            <option id="northern-new-jersey" 
            data-url="<?php echo esc_url($survey); ?>SM-DX8RZSJ3/" 
            data-division="Eastern">
                Northern New Jersey
            </option>
            <option id="northern-ohio" 
            data-url="<?php echo esc_url($survey); ?>SM-MRZFQTJ3/" 
            data-division="Central">
                Northern Ohio
            </option>
            <option id="oklahoma" 
            data-url="<?php echo esc_url($survey); ?>SM-J5PKWTJ3/" 
            data-division="Central">
                Oklahoma
            </option>
            <option id="orange-county" 
            data-url="<?php echo esc_url($survey); ?>SM-YS5ZDM23/" 
            data-division="Western">
                Orange County
            </option>
            <option id="oregon" 
            data-url="<?php echo esc_url($survey); ?>SM-VM97STJ3/" 
            data-division="Western">
                Oregon
            </option>
            <option id="rhode-island" 
            data-url="<?php echo esc_url($survey); ?>SM-6M8JVMJ3/" 
            data-division="Eastern">
                Rhode Island
            </option>
            <option id="san-diego" 
            data-url="<?php echo esc_url($survey); ?>SM-HJPMYM23/" 
            data-division="Western">
                San Diego
            </option>
            <option id="south-carolina" 
            data-url="<?php echo esc_url($survey); ?>SM-P3Q77MJ3/" 
            data-division="Southern">
                South Carolina
            </option>
            <option id="south-central-new-york" 
            data-url="<?php echo esc_url($survey); ?>SM-7SF5XRJ3/" 
            data-division="Eastern">
                South Central New York
            </option>
            <option id="south-central-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-LVBQNTJ3/" 
            data-division="Eastern">
                South Central Pennsylvania
            </option>
            <option id="south-dakota" 
            data-url="<?php echo esc_url($survey); ?>SM-8WHX7MJ3/" 
            data-division="Central">
                South Dakota
            </option>
            <option id="south-texas" 
            data-url="<?php echo esc_url($survey); ?>SM-RGBNYMJ3/" 
            data-division="Central">
                South Texas
            </option>
            <option id="southeast-minnesota" 
            data-url="<?php echo esc_url($survey); ?>SM-SY7LBWJ3/" 
            data-division="Central">
                Southeast Minnesota
            </option>
            <option id="southeast-texas" 
            data-url="<?php echo esc_url($survey); ?>SM-7Q5FDMJ3/" 
            data-division="Central">
                Southeast Texas
            </option>
            <option id="southern-connecticut" 
            data-url="<?php echo esc_url($survey); ?>SM-R5ZSSQJ3/" 
            data-division="Eastern">
                Southern Connecticut
            </option>
            <option id="tampa-bay" 
            data-url="<?php echo esc_url($survey); ?>SM-6GCTVWJ3/" 
            data-division="Southern">
                Tampa Bay
            </option>
            <option id="utah" 
            data-url="<?php echo esc_url($survey); ?>SM-NMMZ2MJ3/" 
            data-division="Western">
                Utah
            </option>
            <option id="vermont" 
            data-url="<?php echo esc_url($survey); ?>SM-8H8VCMJ3/" 
            data-division="Eastern">
                Vermont
            </option>
            <option id="virginia" 
            data-url="<?php echo esc_url($survey); ?>SM-DRSMCMJ3/" 
            data-division="Eastern">
                Virginia
            </option>
            <option id="washington" 
            data-url="<?php echo esc_url($survey); ?>SM-BQJDJMJ3/" 
            data-division="Western">
                Washington
            </option>
            <option id="west-virginia" 
            data-url="<?php echo esc_url($survey); ?>SM-JCYPJMJ3/" 
            data-division="Eastern">
                West Virginia
            </option>
            <option id="westchester" 
            data-url="<?php echo esc_url($survey); ?>SM-RHRZNRJ3/" 
            data-division="Eastern">
                Westchester
            </option>
            <option id="western-massachusetts" 
            data-url="<?php echo esc_url($survey); ?>SM-QJ9YJWJ3/" 
            data-division="Eastern">
                Western Massachusetts
            </option>
            <option id="western-new-york" 
            data-url="<?php echo esc_url($survey); ?>SM-S5P3FRJ3/" 
            data-division="Eastern">
                Western New York
            </option>
            <option id="western-pennsylvania" 
            data-url="<?php echo esc_url($survey); ?>SM-8P63RTJ3/" 
            data-division="Eastern">
                Western Pennsylvania
            </option>
            <option id="wisconsin" 
            data-url="<?php echo esc_url($survey); ?>SM-TKFCQMJ3/" 
            data-division="Central">
                Wisconsin
            </option>
            <option id="wyoming" 
            data-url="<?php echo esc_url($survey); ?>SM-3FLHQMJ3/" 
            data-division="Western">
                Wyoming
            </option>
        </select> 
        <div id="chapter_program_17" style="display:none">
            <h4>Chapter Program Tracking Links</h4>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
        </div>
        <h4>Choose Your Program</h4>
        <select name="program_select_17" id="program_select_17">
            <option id="not-selected"></option>
            <option id="abft" 
            data-central="<?php echo esc_url($survey); ?>SM-JGJ3KQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-V5LKLWGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-RM7KLQBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-PZ5ZLQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-8QLL2JMS/">
                ABFT
            </option>
            <option id="asist" 
            data-central="<?php echo esc_url($survey); ?>SM-SVGYYQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-NXV5ZQGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-R5JSDQBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-MFNP7QBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-WKBFWJMS/">
                ASIST
            </option>
            <option id="asist-facilitator" 
            data-central="<?php echo esc_url($survey); ?>SM-WNCTWQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-FP5XLWGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-7QKSRQBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-BK9RSQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-9XLHSJMS/">
                ASIST Facilitator
            </option>
            <option id="depression-&-bipolar-awareness" 
            data-central="<?php echo esc_url($survey); ?>SM-D63BGQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-29M3RSGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-YHSRXRBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-GZ5DHQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-89TKXJMS/">
                Depression & Bipolar Awareness
            </option>
            <option id="its-real-college-film" 
            data-central="<?php echo esc_url($survey); ?>SM-D63BGQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-29M3RSGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-YHSRXRBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-GZ5DHQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-89TKXJMS/">
                It's Real: College Film
            </option>
            <option id="living-w−bipolar" 
            data-central="<?php echo esc_url($survey); ?>SM-YD35GRBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-KZDNMSGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-M363HRBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-DJLBBRBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-GYMGXQMS/">
                Living w/Bipolar
            </option>
            <option id="mhfa-facilitator" 
            data-central="<?php echo esc_url($survey); ?>SM-S7K7ZRBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-MHV2XSGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-TPYTPRBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-2SMN6RBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-QLWDLWMS/">
                MHFA Facilitator
            </option>
            <option id="mhfa-adult" 
            data-central="<?php echo esc_url($survey); ?>SM-L26BPTBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-QXNT7WGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-7QQF5TBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-XC7YZTBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-ZS8RLSMS/">
                MHFA Adult
            </option>
            <option id="mhfa-youth" 
            data-central="<?php echo esc_url($survey); ?>SM-HYWQLMBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-V6J3NSGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-VTGSKMBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-PVLX8MBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-2PPWVSMS/">
                MHFA Youth
            </option>
            <option id="mts-facilitator" 
            data-central="<?php echo esc_url($survey); ?>SM-MP3RVMBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-25KFHSGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-FHPM9MBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-3FRB7MBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-WFN37SMS/">
                MTS Facilitator
            </option>
            <option id="mts-educator" 
            data-central="<?php echo esc_url($survey); ?>SM-6G7GCMBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-ZGYJGNGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-D6V8YMBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-J3622MBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-6KNGYSMS/">
                MTS Educator
            </option>
            <option id="mts-parent" 
            data-central="<?php echo esc_url($survey); ?>SM-H86CQMBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-P8K5BNGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-MN9SWMBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-KG2HQMBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-8PQ8CSMS/">
                MTS Parent
            </option>
            <option id="mts-parent-spanish" 
            data-central="<?php echo esc_url($survey); ?>SM-7MLVSMBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-WRVTF9BS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-NGFCTMBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-RZ68RMBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-M6NSJSMS/">
                MTS Parent Spanish
            </option>
            <option id="mts-teen" 
            data-central="<?php echo esc_url($survey); ?>SM-B5FLGMBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-9VWN39BS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-5Y6LXMBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-CN38NMBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-CR5MQSMS/">
                MTS Teen
            </option>
            <option id="out-of-the-silence-physicians-suicide" 
            data-central="<?php echo esc_url($survey); ?>SM-C85RBMBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-9CJZPCBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-KZ5D6MBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-FQBSHMBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-FPBTWSMS/">
                Out of the Silence: Physicians & Suicide
            </option>
            <option id="regional-lgbtq-conference" 
            data-central="<?php echo esc_url($survey); ?>SM-PSWWKXBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-FR575CBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-GR2JZMBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-V6VC5MBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-DZ8KRSMS/">
                Regional LGBTQ Conference
            </option>
            <option id="research-connection-program" 
            data-central="<?php echo esc_url($survey); ?>SM-XLGT8XBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-DMDXKJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-SN9G7XBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-ZMZ2VXBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-6BL3MSMS/">
                Research Connection Program
            </option>
            <option id="safetalk" 
            data-central="<?php echo esc_url($survey); ?>SM-LRHL83BS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-CTJFLJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-JG795FBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-RMZWK3BS/" 
            data-all="<?php echo esc_url($survey); ?>SM-S35CXSMS/">
                safeTALK
            </option>
            <option id="safetalk-facilitator" 
            data-central="<?php echo esc_url($survey); ?>SM-8N9683BS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-L7FBVJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-566SV3BS/" 
            data-western="<?php echo esc_url($survey); ?>SM-XTLTL3BS/" 
            data-all="<?php echo esc_url($survey); ?>SM-Z85J3SMS/">
                safeTALK Facilitator
            </option>
            <option id="struggling-in-silence-physicians-suicide" 
            data-central="<?php echo esc_url($survey); ?>SM-SVT393BS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-WRRG7JBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-7XC5V3BS/" 
            data-western="<?php echo esc_url($survey); ?>SM-VGFG73BS/" 
            data-all="<?php echo esc_url($survey); ?>SM-2WBCGSMS/">
                Struggling in Silence: Physicians & Suicide
            </option>
            <option id="suicide-bereavement-clinician-training" 
            data-central="<?php echo esc_url($survey); ?>SM-XZ2KY3BS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-BPC39JBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-P3DJJ3BS/" 
            data-western="<?php echo esc_url($survey); ?>SM-7KMW23BS/" 
            data-all="<?php echo esc_url($survey); ?>SM-WYMXBSMS/">
                Suicide Bereavement Clinician Training
            </option>
            <option id="suicide-loss-support-group-facilitator-adult" 
            data-central="<?php echo esc_url($survey); ?>SM-DR2BT3BS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-5CD7TJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-5FJWW3BS/" 
            data-western="<?php echo esc_url($survey); ?>SM-2DM9R3BS/" 
            data-all="<?php echo esc_url($survey); ?>SM-9PP3HSMS/">
                Suicide Loss Support Group Facilitator - Adult
            </option>
            <option id="suicide-loss-support-group-facilitator-youth" 
            data-central="<?php echo esc_url($survey); ?>SM-JRGSLGBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-H6NCNJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-SS6T7GBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-3PMWVGBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-CBBHJ8XS/">
                Suicide Loss Support Group Facilitator - Youth
            </option>
            <option id="tsl-all-versions" 
            data-central="<?php echo esc_url($survey); ?>SM-TMQWYGBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-J56GFJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-WXYJ9GBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-B5LCDGBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-G52WTSMS/">
                TSL - All Versions
            </option>
            <option id="tsl-firearms" 
            data-central="<?php echo esc_url($survey); ?>SM-HX9SRGBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-2YNJGJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-ZCCSQW5S/" 
            data-western="<?php echo esc_url($survey); ?>SM-KCXZRGBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-HJNTX8XS/">
                TSL Firearms
            </option>
            <option id="tsl-lgbt" 
            data-central="<?php echo esc_url($survey); ?>SM-HX9SRGBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-2YNJGJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-ZCCSQW5S/" 
            data-western="<?php echo esc_url($survey); ?>SM-KCXZRGBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-HJNTX8XS/">
                TSL LGBT
            </option>
            <option id="tsl-seniors" 
            data-central="<?php echo esc_url($survey); ?>SM-ZVBQ3W5S/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-8PZSBJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-QLT5NW5S/" 
            data-western="<?php echo esc_url($survey); ?>SM-2RXJGW5S/" 
            data-all="<?php echo esc_url($survey); ?>SM-TVCSF8XS/">
                TSL Seniors
            </option>
            <option id="tsl-spanish" 
            data-central="<?php echo esc_url($survey); ?>SM-7PRR9S5S/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-QDBWHJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-CTZ59S5S/" 
            data-western="<?php echo esc_url($survey); ?>SM-9ZFGHW5S/" 
            data-all="<?php echo esc_url($survey); ?>SM-B6DHB8XS/">
                TSL Spanish
            </option>
            <option id="tsl-standard" 
            data-central="<?php echo esc_url($survey); ?>SM-H6DNGS5S/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-T8M3PJBS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-N87GYS5S/" 
            data-western="<?php echo esc_url($survey); ?>SM-JBBNCS5S/" 
            data-all="<?php echo esc_url($survey); ?>SM-TRTZH8XS/">
                TSL Standard
            </option>
            <option id="truth-about-suicide-college-film" 
            data-central="<?php echo esc_url($survey); ?>SM-9NPVNQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-HFG6VWGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-FWY6TQBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-W8MKXQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-CWPLTJMS/">
                Truth About Suicide: College Film
            </option>
            <option id="other-information-booth-table-at-event" 
            data-central="<?php echo esc_url($survey); ?>SM-9NPVNQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-HFG6VWGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-FWY6TQBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-W8MKXQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-CWPLTJMS/">
                Other: Information Booth/Table at Event
            </option>
            <option id="other-community-presenation" 
            data-central="<?php echo esc_url($survey); ?>SM-9NPVNQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-HFG6VWGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-FWY6TQBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-W8MKXQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-CWPLTJMS/">
                Other: Community Presentation
            </option>
            <option id="other-suicide-prevention-gatekeeper-training" 
            data-central="<?php echo esc_url($survey); ?>SM-9NPVNQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-HFG6VWGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-FWY6TQBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-W8MKXQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-CWPLTJMS/">
                Other: Suicide Prevention/Gatekeeper Training
            </option>
            <option id="other" 
            data-central="<?php echo esc_url($survey); ?>SM-9NPVNQBS/" 
            data-eastern="<?php echo esc_url($survey); ?>SM-HFG6VWGS/" 
            data-southern="<?php echo esc_url($survey); ?>SM-FWY6TQBS/" 
            data-western="<?php echo esc_url($survey); ?>SM-W8MKXQBS/" 
            data-all="<?php echo esc_url($survey); ?>SM-CWPLTJMS/">
                Other
            </option>
        </select>
        <div id="program_division_17" style="display:none">
            <h4>Program Tracking Links by Division</h4>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
        </div>
    </div> <!-- .entry-content -->
</main>
<script>
jQuery(document).ready(function($){
    $('#chapter_select_18, #chapter_select_17').on('change', function(e){
        var $chapter = $(this)
        var $id = $(this).attr('id')
        if($(this).attr('id') !== 'not-selected') {
            $chapter.
                data('selected','yes')
            var url = $chapter.find('option:selected').
                data('url')
            var division = $chapter.find('option:selected').
                data('division')
            var division_url = ''
            var all_url = ''
            if($id === 'chapter_select_18') {
                var chapter_program = 'chapter_program_18'
                all_url = 'https://www.surveymonkey.com/results/SM-JQPZH56H8/'
                switch(division) {
                    case 'Central':
                        division_url = 'https://www.surveymonkey.com/results/SM-6YW5Q56H8/'
                        break
                    case 'Eastern':
                        division_url = 'https://www.surveymonkey.com/results/SM-WCFQS56H8/'
                        break
                    case 'Southern':
                        division_url = 'https://www.surveymonkey.com/results/SM-GHP7T56H8/'
                        break
                    case 'Western':
                        division_url = 'https://www.surveymonkey.com/results/SM-LJLZM56H8/'
                        break
                }
            } else if($id === 'chapter_select_17') {
                var chapter_program = 'chapter_program_17'
                all_url = 'https://www.surveymonkey.com/results/SM-VG9L7CW3/'
                switch(division) {
                    case 'Central':
                        division_url = 'https://www.surveymonkey.com/results/SM-S2QZWMJ3/'
                        break
                    case 'Eastern':
                    division_url = 'https://www.surveymonkey.com/results/SM-8D2MSMJ3/'
                    break
                    case 'Southern':
                        division_url = 'https://www.surveymonkey.com/results/SM-HND6SMJ3/'
                        break
                    case 'Western':
                        division_url = 'https://www.surveymonkey.com/results/SM-QMVTRMJ3/'
                        break
                }
            }
            $('#' + chapter_program).attr('style','display:block')
            $('#' + chapter_program + ' > p:nth-of-type(1)').
                html($chapter.find('option:selected').
                    text() + ' &mdash; <a href="' + url + '" target="_blank">' + url + '</a>')
            $('#' + chapter_program + ' > p:nth-of-type(2)').
                html(division + ' &mdash; <a href="' + division_url + '" target="_blank">' + division_url + '</a>')
            $('#' + chapter_program + ' > p:nth-of-type(3)').
                html('All Chapters &mdash; <a href="' + all_url + '" target="_blank">' + all_url + '</a>')
            if($id === 'chapter_select_16') {
                $('#' + chapter_program + ' > p:nth-of-type(4)').
                    html('Universal Report &mdash; <a href="' + uni_url + '" target="_blank">' + uni_url + '</a>')
            }
        } else {
            $('#chapter_program_18, #chapter_program_17').attr('style','display:none')
        }
    })
    $('#program_select_18, #program_select_17').on('change', function(e){
        var $program = $(this)
        var $id = $(this).attr('id')
        if($(this).attr('id') !== 'not-selected') {
            var central  = $program.find('option:selected').
                data('central')
            var eastern  = $program.find('option:selected').
                data('eastern')
            var southern = $program.find('option:selected').
                data('southern')
            var western  = $program.find('option:selected').
                data('western')
            var all      = $program.find('option:selected').
                data('all')
            if($id === 'program_select_18') {
                var program_division = 'program_division_18'
                $('#' + program_division).attr('style','display:block')
                $('#' + program_division + ' > p:nth-of-type(1)').
                    html('All Chapters &mdash; <a href="' + all + '" target="_blank">' + all + '</a>')
            } else if($id === 'program_select_17') {
                var program_division = 'program_division_17'
                $('#' + program_division).attr('style','display:block')
                $('#' + program_division + ' > p:nth-of-type(1)').
                    html('Central Division &mdash; <a href="' + central + '" target="_blank">' + central + '</a>')
                $('#' + program_division + ' > p:nth-of-type(2)').
                    html('Eastern Division &mdash; <a href="' + eastern + '" target="_blank">' + eastern + '</a>')
                $('#' + program_division + ' > p:nth-of-type(3)').
                    html('Southern Division &mdash; <a href="' + southern + '" target="_blank">' + southern + '</a>')
                $('#' + program_division + ' > p:nth-of-type(4)').
                    html('Western Division &mdash; <a href="' + western + '" target="_blank">' + western + '</a>')
                $('#' + program_division + ' > p:nth-of-type(4)').
                    html('All Chapters &mdash; <a href="' + all + '" target="_blank">' + all + '</a>')
            }
        } else {
            $('#program_division_18, #program_division_17').attr('style','display:none')
        }
    })
})
</script>