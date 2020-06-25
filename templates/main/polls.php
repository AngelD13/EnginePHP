<strong>Скрипт:</strong> опроса родителей
<br>

<div class="pollsMain">    
    <form action="PHP/first-cell.php" method="post">
    <div class="Fields">
            <!-- Возраст опрашиваемого -->
                <fieldset>
                    <legend><b>Скільки вам років?</b></legend>
                    <label><input type="radio" name="ages" value="11">з 20 по 35</label><br>
                    <label><input type="radio" name="ages" value="12">з 35 по 55</label><br>
                    <label><input type="radio" name="ages" value="13">з 55 та старше</label><br>
                </fieldset>
    </div>      
            
            <!-- Кем приходится опрашиваемый -->
    <div class="Fields">
                <fieldset ID="family">
                    <legend><b>Хто ви дитині?</b></legend>
                    <label><input type="radio" name="familys" value="21" onclick="clickRemove()">батько/мати</label><br>
                    <label><input type="radio" name="familys" value="22" onclick="clickRemove()">дідусь/бабуся</label><br>
                    <label><input type="radio" name="familys" value="23" onclick="clickRemove()">брат/сестра</label><br>
                    <label><input type="radio" name="familys" value="24" onclick="clickAdd()">інше (треба вказати)</label><br>
                </fieldset>
    </div>

    <!-- В какой класс ходит -->
    <div class="Fields">
                <fieldset>
                    <legend><b>До якого класу ходить ваша дитина?</b></legend>
                    <label>
                        <select>
                            <option value="31">1 клас</option>
                            <option value="32">2 клас</option>
                            <option value="33">3 клас</option>
                            <option value="34">4 клас</option>
                            <option value="35">5 клас</option>
                            <option value="36">6 клас</option>
                            <option value="37">7 клас</option>
                            <option value="38">8 клас</option>
                            <option value="39">9 клас</option>
                            <option value="310">10 клас</option>
                            <option value="311">11 клас</option>
                            <option value="312">12 клас</option>
                        </select>
                    </label>
                </fieldset>
    </div>
    <div>
            <p><input type="reset"> <input type="submit"></p>    
    </div>
    </form>
    
    </div>
    
</div>